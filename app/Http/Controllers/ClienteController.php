<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\User;
use App\Models\Cidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Cliente::all();
        $clientes = Cliente::with(['usuario.cidade'])->withCount('pedidos')->get();

        $resultado = $clientes->map(function ($c) {
            return [
                'id' => $c->id_usuario,
                'id_usuario' => $c->id_usuario,
                'nome' => $c->usuario->nome ?? 'Cliente #' . $c->id_usuario,
                'email' => $c->usuario->email ?? '',
                'telefone' => $c->usuario->telefone ?? '',
                'cidade' => $c->usuario->cidade->nome ?? '',
                'endereco' => $c->usuario->endereco ?? '',
                'data_nascimento' => $c->usuario->data_nascimento ?? '',
                'data_cadastro' => $c->created_at ? $c->created_at->format('d/m/Y') : date('d/m/Y'),
                'total_pedidos' => $c->pedidos_count ?? 0,
            ];
        });

        return response()->json($resultado, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'nullable|email',
            'telefone' => 'required|string|max:20',
            'id_cidade' => 'nullable|integer',
            'endereco' => 'nullable|string|max:255',
        ]);

        DB::beginTransaction();
        try {
            $idCidade = $request->id_cidade ?: 4007;
            if (!Cidade::find($idCidade)) {
                $firstCity = Cidade::first();
                $idCidade = $firstCity ? $firstCity->id_cidade : 4007;
            }

            $email = $request->email ?: ('cliente.' . time() . '@bazardesapega.local');
            $existingUser = User::where('email', $email)->first();

            if ($existingUser) {
                $usuario = $existingUser;
            } else {
                $usuario = User::create([
                    'id_cidade' => $idCidade,
                    'nome' => $request->nome,
                    'data_nascimento' => $request->data_nascimento ?: '1990-01-01',
                    'telefone' => $request->telefone,
                    'email' => $email,
                    'endereco' => $request->endereco ?: 'Venda Direta / Balcão',
                    'is_admin' => false,
                ]);
            }

            $cliente = Cliente::firstOrCreate(
                ['id_usuario' => $usuario->id_usuario],
                ['senha' => Hash::make($request->senha ?: 'bazar123')]
            );

            DB::commit();

            return response()->json([
                'message' => 'Cliente cadastrado com sucesso!',
                'id' => $cliente->id_usuario,
                'id_usuario' => $cliente->id_usuario,
                'nome' => $usuario->nome,
                'email' => $usuario->email,
                'telefone' => $usuario->telefone,
            ], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Erro ao cadastrar cliente.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Cliente::with('pedidos')->findOrFail($id);
    }
        $c = Cliente::with([
            'usuario.cidade',
            'pedidos.statusPedido',
            'pedidos.tipoEntrega',
            'pedidos.itens.produto'
        ])->findOrFail($id);

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
        $pedidosFormatados = $c->pedidos->map(function ($p) {
            return [
                'id_pedido' => $p->id_pedido,
                'data_pedido' => $p->data_pedido ? date('d/m/Y', strtotime($p->data_pedido)) : '',
                'valor_total' => (float) $p->valor_total,
                'status' => $p->statusPedido->nome ?? 'Aguardando Pagamento',
                'tipo_entrega_nome' => $p->tipoEntrega->nome ?? 'Entrega',
            ];
        });

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return response()->json([
            'id' => $c->id_usuario,
            'id_usuario' => $c->id_usuario,
            'nome' => $c->usuario->nome ?? 'Cliente #' . $c->id_usuario,
            'email' => $c->usuario->email ?? '',
            'telefone' => $c->usuario->telefone ?? '',
            'cidade' => $c->usuario->cidade->nome ?? '',
            'endereco' => $c->usuario->endereco ?? '',
            'data_nascimento' => $c->usuario->data_nascimento ?? '',
            'data_cadastro' => $c->created_at ? $c->created_at->format('d/m/Y') : date('d/m/Y'),
            'total_pedidos' => $pedidosFormatados->count(),
            'total_gasto' => $pedidosFormatados->sum('valor_total'),
            'pedidos' => $pedidosFormatados,
        ], 200);
    }
}

