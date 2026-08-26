<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    // Rota: GET /api/produtos
    public function index(Request $request)
    {
        // 1. Inicia a busca pegando apenas produtos disponíveis (id_status_disp = 1)
        // O 'with' já traz as informações das tabelas de Tipo e Genero juntas!
        $query = Produto::disponivel()->with(['tipo', 'genero']);

        // 2. Aplica os filtros dinâmicos, se o Front-end tiver enviado na URL
        // Exemplo: /api/produtos?genero=1&tamanho=M
        if ($request->has('tipo')) {
            $query->where('id_tipo', $request->tipo);
        }
        if ($request->has('genero')) {
            $query->where('id_genero', $request->genero);
        }
        if ($request->has('tamanho')) {
            $query->where('tamanho', $request->tamanho);
        }

        // 3. Executa a busca no banco de dados
        $produtos = $query->get();

        // 4. Formata a resposta exatamente como a Especificação (SDD) pediu
        $resultado = $produtos->map(function ($produto) {
            return [
                'id_produto' => $produto->id_produto,
                'marca' => $produto->marca,
                'tamanho' => $produto->tamanho,
                'cor' => $produto->cor,
                'preco_venda' => $produto->preco_venda,
                'tipo' => $produto->tipo->nome ?? 'Sem Categoria',
                'genero' => $produto->genero->nome ?? 'Não Definido',
                'foto_principal' => asset('storage/' . $produto->foto_principal), // Gera a URL completa da imagem
            ];
        });

        return response()->json($resultado, 200);
    }

    // Rota: GET /api/produtos/{id}
    public function show($id)
    {
        // Busca o produto pelo ID. O 'with' traz a galeria de fotos junto.
        $produto = Produto::with(['tipo', 'genero', 'fotos'])->find($id);

        if (!$produto) {
            return response()->json(['message' => 'Peça não encontrada no acervo.'], 404);
        }

        // Formata os dados completos para a página de Detalhes
        $resultado = [
            'id_produto' => $produto->id_produto,
            'marca' => $produto->marca,
            'tamanho' => $produto->tamanho,
            'cor' => $produto->cor,
            'preco_venda' => $produto->preco_venda,
            'data_entrada' => $produto->data_entrada,
            'tipo' => $produto->tipo->nome ?? null,
            'genero' => $produto->genero->nome ?? null,
            'foto_principal' => asset('storage/' . $produto->foto_principal),
            'fotos' => $produto->fotos->map(function ($foto) {
                return [
                    'id_foto' => $foto->id_foto,
                    'caminho_arquivo' => asset('storage/' . $foto->caminho_arquivo)
                ];
            })
        ];

        return response()->json($resultado, 200);
    }
}