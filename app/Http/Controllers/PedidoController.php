<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\ItemPedido;
use App\Models\Produto;
use App\Models\StatusPedido;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PedidoController extends Controller
{
    private function formatPedido($p)
    {
        return [
            'id_pedido' => $p->id_pedido,
            'id_cliente' => $p->id_cliente,
            'cliente_nome' => $p->cliente?->usuario?->nome ?? 'Cliente #' . $p->id_cliente,
            'cliente_email' => $p->cliente?->usuario?->email ?? '',
            'cliente_telefone' => $p->cliente?->usuario?->telefone ?? '',
            'endereco_entrega' => $p->cliente?->usuario?->endereco ?? 'Endereço não informado',
            'cidade_cliente' => $p->cliente?->usuario?->cidade?->nome ?? '',
            'data_pedido' => $p->data_pedido ? date('d/m/Y H:i', strtotime($p->data_pedido)) : ($p->created_at ? $p->created_at->format('d/m/Y H:i') : ''),
            'valor_total' => (float) $p->valor_total,
            'id_status_pedido' => $p->id_status_pedido,
            'status' => $p->statusPedido?->nome ?? 'Aguardando Pagamento',
            'id_tipo_entrega' => $p->id_tipo_entrega,
            'tipo_entrega_nome' => $p->tipoEntrega?->nome ?? 'Entrega',
            'produtos' => $p->itens ? $p->itens->map(function ($item) {
                $prod = $item->produto;
                return [
                    'id_produto' => $item->id_produto,
                    'marca' => $prod?->marca ?? 'Peça',
                    'tipo' => $prod?->tipo?->nome ?? $prod?->marca ?? 'Peça Única',
                    'tamanho' => $prod?->tamanho ?? '-',
                    'cor' => $prod?->cor ?? '',
                    'preco_venda' => (float) ($prod?->preco_venda ?? 0),
                    'foto' => $prod?->foto_principal ? asset('storage/' . $prod->foto_principal) : '',
                ];
            }) : [],
        ];
    }

    // GET /api/admin/pedidos
    public function index()
    {
        $pedidos = Pedido::with([
            'cliente.usuario.cidade',
            'statusPedido',
            'tipoEntrega',
            'itens.produto.tipo'
        ])->orderBy('id_pedido', 'desc')->get();

        return response()->json($pedidos->map(fn($p) => $this->formatPedido($p)), 200);
    }

    // GET /api/admin/pedidos/{id}
    public function show(string $id)
    {
        $pedido = Pedido::with([
            'cliente.usuario.cidade',
            'statusPedido',
            'tipoEntrega',
            'itens.produto.tipo'
        ])->findOrFail($id);

        return response()->json($this->formatPedido($pedido), 200);
    }

    // GET /api/meus-pedidos
    public function meusPedidos(Request $request)
    {
        $usuario = $request->user();
        $pedidos = Pedido::with([
            'cliente.usuario.cidade',
            'statusPedido',
            'tipoEntrega',
            'itens.produto.tipo'
        ])
            ->where('id_cliente', $usuario->id_usuario)
            ->orderBy('id_pedido', 'desc')
            ->get();

        return response()->json($pedidos->map(fn($p) => $this->formatPedido($p)), 200);
    }

    // POST /api/pedidos (ou POST /api/admin/pedidos)
    public function store(Request $request)
    {
        $request->validate([
            'id_tipo_entrega' => 'required|exists:tipos_entrega,id_tipo_entrega',
            'produtos' => 'required|array|min:1',
            'produtos.*' => 'exists:produtos,id_produto',
            'id_cliente' => 'nullable|integer',
            'id_status_pedido' => 'nullable|integer',
        ]);

        $usuario = $request->user();
        $idCliente = $request->id_cliente ?: $usuario->id_usuario;

        // Garante que o usuário tenha registro na tabela clientes (caso o admin esteja criando no próprio ID ou cliente novo)
        Cliente::firstOrCreate(
            ['id_usuario' => $idCliente],
            ['senha' => Hash::make('bazar123')]
        );

        $produtos = Produto::whereIn('id_produto', $request->produtos)->get();

        foreach ($produtos as $produto) {
            if ($produto->id_status_disp != 1) {
                return response()->json([
                    'message' => 'Erro: A peça "' . $produto->marca . '" (ID: ' . $produto->id_produto . ') já foi reservada ou vendida.'
                ], 422);
            }
        }

        $valor_total = $produtos->sum('preco_venda');
        $idStatus = $request->id_status_pedido ?: 1;

        DB::beginTransaction();

        try {
            $pedido = Pedido::create([
                'id_cliente' => $idCliente,
                'id_status_pedido' => $idStatus,
                'id_tipo_entrega' => $request->id_tipo_entrega,
                'data_pedido' => now(),
                'valor_total' => $valor_total,
            ]);

            foreach ($produtos as $produto) {
                ItemPedido::create([
                    'id_pedido' => $pedido->id_pedido,
                    'id_produto' => $produto->id_produto
                ]);

                $produto->update(['id_status_disp' => 3]);
            }

            DB::commit();

            $statusObj = StatusPedido::find($idStatus);

            return response()->json([
                'message' => 'Pedido realizado com sucesso!',
                'id_pedido' => $pedido->id_pedido,
                'valor_total' => (float) $valor_total,
                'status' => $statusObj?->nome ?? 'Aguardando Pagamento',
                'status_pedido' => $statusObj?->nome ?? 'Aguardando Pagamento',
            ], 201);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Erro interno ao processar pedido.', 'error' => $e->getMessage()], 500);
        }
    }

    // PUT/PATCH /api/admin/pedidos/{id}
    public function update(Request $request, string $id)
    {
        $pedido = Pedido::with('itens.produto')->findOrFail($id);

        $novoStatusId = $request->id_status_pedido;

        if (!$novoStatusId && $request->has('status')) {
            $statusModel = StatusPedido::where('nome', $request->status)->first();
            if (!$statusModel) {
                // Cria o status caso ainda não exista na tabela (ex: "Pronto para Retirada" ou "Finalizado")
                $statusModel = StatusPedido::create(['nome' => $request->status]);
            }
            $novoStatusId = $statusModel->id_status_pedido;
        }

        if ($novoStatusId) {
            $pedido->update(['id_status_pedido' => $novoStatusId]);

            // Se cancelado, devolve as peças para disponível (1)
            $statusObj = StatusPedido::find($novoStatusId);
            if ($statusObj && strtolower($statusObj->nome) === 'cancelado') {
                foreach ($pedido->itens as $item) {
                    if ($item->produto) {
                        $item->produto->update(['id_status_disp' => 1]);
                    }
                }
            }
        }

        $pedido->load(['cliente.usuario.cidade', 'statusPedido', 'tipoEntrega', 'itens.produto.tipo']);
        return response()->json($this->formatPedido($pedido), 200);
    }
}
}