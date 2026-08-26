<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\ItemPedido;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{
    // Rota: POST /api/pedidos
    public function store(Request $request)
    {
        // 1. Valida se o formato enviado está correto
        $request->validate([
            'id_tipo_entrega' => 'required|exists:tipos_entrega,id_tipo_entrega',
            'produtos' => 'required|array|min:1',
            'produtos.*' => 'exists:produtos,id_produto'
        ]);

        // Pega o usuário que está autenticado via Token Sanctum
        $usuario = $request->user();

        // 2. Busca todos os produtos enviados para conferir a disponibilidade
        $produtos = Produto::whereIn('id_produto', $request->produtos)->get();

        foreach ($produtos as $produto) {
            // No seu banco: 1 = Disponível
            if ($produto->id_status_disp != 1) {
                return response()->json([
                    'message' => 'Erro: A peça "' . $produto->marca . '" (ID: ' . $produto->id_produto . ') já foi reservada ou vendida.'
                ], 422);
            }
        }

        // Calcula o valor total do pedido somando os preços de venda
        $valor_total = $produtos->sum('preco_venda');

        // 3. Inicia a transação com o banco de dados (Segurança)
        DB::beginTransaction();

        try {
            // Cria o Cabeçalho do Pedido
            // Assumimos que id_status_pedido = 1 significa "Aguardando Pagamento"
            $pedido = Pedido::create([
                'id_cliente' => $usuario->id_usuario,
                'id_status_pedido' => 1, 
                'id_tipo_entrega' => $request->id_tipo_entrega,
                'data_pedido' => now(),
                'valor_total' => $valor_total,
            ]);

            // Para cada produto escolhido, criamos o Item e atualizamos o status da roupa
            foreach ($produtos as $produto) {
                ItemPedido::create([
                    'id_pedido' => $pedido->id_pedido,
                    'id_produto' => $produto->id_produto
                ]);

                // Atualiza o status para 3 ("Vendido")
                $produto->update(['id_status_disp' => 3]);
            }

            DB::commit(); // Grava tudo no banco!

            return response()->json([
                'message' => 'Pedido realizado com sucesso!',
                'id_pedido' => $pedido->id_pedido,
                'valor_total' => $valor_total,
                'status_pedido' => 'Aguardando Pagamento'
            ], 201);

        } catch (\Exception $e) {
            DB::rollBack(); // Se der erro no meio (ex: banco caiu), cancela tudo
            return response()->json(['message' => 'Erro interno ao processar pedido.', 'error' => $e->getMessage()], 500);
        }
    }
}