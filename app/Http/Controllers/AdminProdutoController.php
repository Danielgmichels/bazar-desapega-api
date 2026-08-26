<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Models\FotoProduto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminProdutoController extends Controller
{
    // Rota: POST /api/admin/produtos
    public function store(Request $request)
    {
        // 1. Validação pesada, incluindo regras para os arquivos (image, mimes, max size)
        $request->validate([
            'id_fornecedor' => 'required|exists:fornecedores,id_usuario',
            'id_tipo' => 'required|exists:tipos_produto,id_tipo',
            'id_genero' => 'required|exists:generos,id_genero',
            'data_entrada' => 'required|date',
            'marca' => 'nullable|string|max:50',
            'tamanho' => 'required|string|max:10',
            'cor' => 'required|string|max:30',
            'preco_custo' => 'required|numeric|min:0',
            'preco_venda' => 'required|numeric|min:0',
            'foto_principal' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048', // max 2MB
            'fotos_secundarias' => 'nullable|array',
            'fotos_secundarias.*' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        DB::beginTransaction();

        try {
            // 2. Faz o Upload da Foto Principal para a pasta public/storage/produtos
            $caminhoCapa = $request->file('foto_principal')->store('produtos', 'public');

            // 3. Cadastra o Produto no banco
            $produto = Produto::create([
                'id_fornecedor' => $request->id_fornecedor,
                'id_tipo' => $request->id_tipo,
                'id_genero' => $request->id_genero,
                'id_status_disp' => 1, // Entra como Disponível (1)
                'data_entrada' => $request->data_entrada,
                'marca' => $request->marca,
                'tamanho' => $request->tamanho,
                'cor' => $request->cor,
                'preco_custo' => $request->preco_custo,
                'preco_venda' => $request->preco_venda,
                'foto_principal' => $caminhoCapa,
            ]);

            // 4. Upload das Fotos Secundárias (se a Michele tiver enviado alguma)
            if ($request->hasFile('fotos_secundarias')) {
                foreach ($request->file('fotos_secundarias') as $foto) {
                    $caminhoFoto = $foto->store('produtos/galeria', 'public');
                    
                    FotoProduto::create([
                        'id_produto' => $produto->id_produto,
                        'caminho_arquivo' => $caminhoFoto,
                    ]);
                }
            }

            DB::commit();

            return response()->json(['message' => 'Peça de roupa cadastrada com sucesso!', 'id_produto' => $produto->id_produto], 201);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Erro ao cadastrar produto.', 'error' => $e->getMessage()], 500);
        }
    }
}