<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Models\FotoProduto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminProdutoController extends Controller
{
    private function formatAdminProduto($produto)
    {
        $isDisponivel = $produto->id_status_disp == 1;
        return [
            'id' => $produto->id_produto,
            'id_produto' => $produto->id_produto,
            'id_fornecedor' => $produto->id_fornecedor,
            'fornecedor_nome' => $produto->fornecedor?->usuario?->nome ?? 'Fornecedor #' . $produto->id_fornecedor,
            'id_tipo' => $produto->id_tipo,
            'tipo' => $produto->tipo?->nome ?? 'Sem Categoria',
            'id_genero' => $produto->id_genero,
            'genero' => $produto->genero?->nome ?? 'Unissex',
            'id_status_disp' => $produto->id_status_disp,
            'status' => $isDisponivel ? 'Disponível' : 'Vendido',
            'disponivel' => $isDisponivel,
            'data_entrada' => $produto->data_entrada,
            'marca' => $produto->marca ?? 'Sem marca',
            'tamanho' => $produto->tamanho,
            'cor' => $produto->cor,
            'preco_custo' => (float) $produto->preco_custo,
            'preco_venda' => (float) $produto->preco_venda,
            'foto_principal' => $produto->foto_principal ? asset('storage/' . $produto->foto_principal) : '',
            'fotos' => $produto->fotos ? $produto->fotos->map(function ($f) {
                return [
                    'id_foto' => $f->id_foto,
                    'caminho_arquivo' => asset('storage/' . $f->caminho_arquivo),
                    'url_foto' => asset('storage/' . $f->caminho_arquivo),
                ];
            }) : [],
        ];
    }

    // GET /api/admin/produtos
    public function index()
    {
        $produtos = Produto::with(['fornecedor.usuario', 'tipo', 'genero', 'fotos'])
            ->orderBy('id_produto', 'desc')
            ->get();

        return response()->json($produtos->map(fn($p) => $this->formatAdminProduto($p)), 200);
    }

    // GET /api/admin/produtos/{id}
    public function show(string $id)
    {
        $produto = Produto::with(['fornecedor.usuario', 'tipo', 'genero', 'fotos'])->findOrFail($id);
        return response()->json($this->formatAdminProduto($produto), 200);
    }

    // POST /api/admin/produtos
    public function store(Request $request)
    {
        // Suporta tanto foto_principal/fotos_secundarias quanto array fotos[]
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
        ]);

        DB::beginTransaction();

        try {
            $caminhoCapa = null;
            $fotosExtras = [];

            if ($request->hasFile('foto_principal')) {
                $caminhoCapa = $request->file('foto_principal')->store('produtos', 'public');
                if ($request->hasFile('fotos_secundarias')) {
                    $fotosExtras = $request->file('fotos_secundarias');
                }
            } elseif ($request->hasFile('fotos')) {
                $arquivos = $request->file('fotos');
                if (is_array($arquivos) && count($arquivos) > 0) {
                    $caminhoCapa = $arquivos[0]->store('produtos', 'public');
                    $fotosExtras = array_slice($arquivos, 1);
                }
            }

            if (!$caminhoCapa) {
                return response()->json(['message' => 'Envie pelo menos uma foto para a peça.'], 422);
            }

            $produto = Produto::create([
                'id_fornecedor' => $request->id_fornecedor,
                'id_tipo' => $request->id_tipo,
                'id_genero' => $request->id_genero,
                'id_status_disp' => 1,
                'data_entrada' => $request->data_entrada,
                'marca' => $request->marca ?? 'Peça Exclusiva',
                'tamanho' => $request->tamanho,
                'cor' => $request->cor,
                'preco_custo' => $request->preco_custo,
                'preco_venda' => $request->preco_venda,
                'foto_principal' => $caminhoCapa,
            ]);

            foreach ($fotosExtras as $foto) {
                $caminhoFoto = $foto->store('produtos/galeria', 'public');
                FotoProduto::create([
                    'id_produto' => $produto->id_produto,
                    'caminho_arquivo' => $caminhoFoto,
                ]);
            }

            DB::commit();

            return response()->json([
                'message' => 'Peça de roupa cadastrada com sucesso!',
                'id_produto' => $produto->id_produto,
            ], 201);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Erro ao cadastrar produto: ' . $e->getMessage(),
                'error' => $e->getMessage()
            ], 500);
        }
    }

    // PUT/PATCH /api/admin/produtos/{id}
    public function update(Request $request, string $id)
    {
        $produto = Produto::findOrFail($id);

        $dados = [];
        if ($request->has('marca')) $dados['marca'] = $request->marca;
        if ($request->has('tamanho')) $dados['tamanho'] = $request->tamanho;
        if ($request->has('cor')) $dados['cor'] = $request->cor;
        if ($request->has('preco_custo')) $dados['preco_custo'] = $request->preco_custo;
        if ($request->has('preco_venda')) $dados['preco_venda'] = $request->preco_venda;
        if ($request->has('id_tipo')) $dados['id_tipo'] = $request->id_tipo;
        if ($request->has('id_genero')) $dados['id_genero'] = $request->id_genero;
        if ($request->has('id_fornecedor')) $dados['id_fornecedor'] = $request->id_fornecedor;

        if ($request->has('status')) {
            $dados['id_status_disp'] = ($request->status === 'Disponível' || $request->status === '1') ? 1 : 3;
        } elseif ($request->has('id_status_disp')) {
            $dados['id_status_disp'] = $request->id_status_disp;
        }

        $produto->update($dados);
        $produto->load(['fornecedor.usuario', 'tipo', 'genero', 'fotos']);

        return response()->json($this->formatAdminProduto($produto), 200);
    }

    // DELETE /api/admin/produtos/{id}
    public function destroy(string $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return response()->json(['message' => 'Produto removido com sucesso.'], 200);
    }
}