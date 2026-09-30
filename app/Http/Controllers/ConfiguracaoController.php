<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoEntrega;
use App\Models\TipoProduto;
use App\Models\Genero;
use App\Models\StatusPedido;

class ConfiguracaoController extends Controller
{
    // GET /api/admin/configuracoes
    public function index()
    {
        return response()->json([
            'tipos_entrega' => TipoEntrega::orderBy('id_tipo_entrega')->get(),
            'tipos_produto' => TipoProduto::orderBy('id_tipo')->get(),
            'generos' => Genero::orderBy('id_genero')->get(),
            'status_pedidos' => StatusPedido::orderBy('id_status_pedido')->get(),
        ], 200);
    }

    // POST /api/admin/configuracoes/{grupo}
    public function store(Request $request, string $grupo)
    {
        $request->validate(['nome' => 'required|string|max:80']);

        switch ($grupo) {
            case 'tipos_entrega':
                $item = TipoEntrega::create(['nome' => $request->nome]);
                return response()->json($item, 201);
            case 'tipos_produto':
                $item = TipoProduto::create(['nome' => $request->nome]);
                return response()->json($item, 201);
            case 'generos':
                $item = Genero::create(['nome' => $request->nome]);
                return response()->json($item, 201);
            case 'status_pedidos':
                $item = StatusPedido::create(['nome' => $request->nome]);
                return response()->json($item, 201);
            default:
                return response()->json(['message' => 'Grupo de configuração inválido.'], 400);
        }
    }

    // PUT /api/admin/configuracoes/{grupo}/{id}
    public function update(Request $request, string $grupo, string $id)
    {
        $request->validate(['nome' => 'required|string|max:80']);

        switch ($grupo) {
            case 'tipos_entrega':
                $item = TipoEntrega::findOrFail($id);
                $item->update(['nome' => $request->nome]);
                return response()->json($item, 200);
            case 'tipos_produto':
                $item = TipoProduto::findOrFail($id);
                $item->update(['nome' => $request->nome]);
                return response()->json($item, 200);
            case 'generos':
                $item = Genero::findOrFail($id);
                $item->update(['nome' => $request->nome]);
                return response()->json($item, 200);
            case 'status_pedidos':
                $item = StatusPedido::findOrFail($id);
                $item->update(['nome' => $request->nome]);
                return response()->json($item, 200);
            default:
                return response()->json(['message' => 'Grupo inválido.'], 400);
        }
    }

    // DELETE /api/admin/configuracoes/{grupo}/{id}
    public function destroy(string $grupo, string $id)
    {
        try {
            switch ($grupo) {
                case 'tipos_entrega':
                    TipoEntrega::findOrFail($id)->delete();
                    break;
                case 'tipos_produto':
                    TipoProduto::findOrFail($id)->delete();
                    break;
                case 'generos':
                    Genero::findOrFail($id)->delete();
                    break;
                case 'status_pedidos':
                    StatusPedido::findOrFail($id)->delete();
                    break;
                default:
                    return response()->json(['message' => 'Grupo inválido.'], 400);
            }
            return response()->json(['message' => 'Item removido com sucesso.'], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Não é possível excluir este item pois ele já está vinculado a produtos ou pedidos.'
            ], 422);
        }
    }
}

