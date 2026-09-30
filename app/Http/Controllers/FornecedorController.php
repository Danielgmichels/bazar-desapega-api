<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Fornecedor::all();
        $fornecedores = Fornecedor::with(['usuario.cidade'])->withCount('produtos')->get();

        $resultado = $fornecedores->map(function ($f) {
            return [
                'id' => $f->id_usuario,
                'id_usuario' => $f->id_usuario,
                'nome' => $f->usuario->nome ?? 'Fornecedor #' . $f->id_usuario,
                'email' => $f->usuario->email ?? '',
                'telefone' => $f->usuario->telefone ?? '',
                'endereco' => $f->usuario->endereco ?? '',
                'id_cidade' => $f->usuario->id_cidade ?? 4007,
                'cidade' => $f->usuario->cidade->nome ?? '',
                'pecas_fornecidas' => $f->produtos_count ?? 0,
                'data_parceria' => $f->created_at ? $f->created_at->format('d/m/Y') : date('d/m/Y'),
                'status' => 'Ativo',
            ];
        });

        return response()->json($resultado, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Fornecedor::create($request->all());
        // Caso o admin envie apenas um id_usuario já existente
        if ($request->has('id_usuario') && !$request->has('nome')) {
            $fornecedor = Fornecedor::firstOrCreate(['id_usuario' => $request->id_usuario]);
            $fornecedor->load('usuario.cidade');
            return response()->json([
                'id' => $fornecedor->id_usuario,
                'id_usuario' => $fornecedor->id_usuario,
                'nome' => $fornecedor->usuario->nome ?? 'Fornecedor',
                'email' => $fornecedor->usuario->email ?? '',
                'telefone' => $fornecedor->usuario->telefone ?? '',
            ], 201);
        }

        $request->validate([
            'nome' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:usuarios,email',
            'telefone' => 'nullable|string|max:20',
            'id_cidade' => 'nullable|exists:cidades,id_cidade',
            'endereco' => 'nullable|string|max:150',
        ]);

        DB::beginTransaction();
        try {
            $user = User::create([
                'nome' => $request->nome,
                'email' => $request->email,
                'telefone' => $request->telefone,
                'id_cidade' => $request->id_cidade ?? 4007,
                'endereco' => $request->endereco,
                'is_admin' => false,
            ]);

            $fornecedor = Fornecedor::create([
                'id_usuario' => $user->id_usuario,
            ]);

            DB::commit();

            return response()->json([
                'message' => 'Fornecedor cadastrado com sucesso!',
                'id' => $user->id_usuario,
                'id_usuario' => $user->id_usuario,
                'nome' => $user->nome,
                'email' => $user->email,
                'telefone' => $user->telefone,
                'endereco' => $user->endereco,
                'pecas_fornecidas' => 0,
                'status' => 'Ativo',
            ], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Erro ao cadastrar fornecedor: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Fornecedor::with('produtos')->findOrFail($id);
        $f = Fornecedor::with(['usuario.cidade', 'produtos'])->findOrFail($id);

        return response()->json([
            'id' => $f->id_usuario,
            'id_usuario' => $f->id_usuario,
            'nome' => $f->usuario->nome ?? '',
            'email' => $f->usuario->email ?? '',
            'telefone' => $f->usuario->telefone ?? '',
            'endereco' => $f->usuario->endereco ?? '',
            'id_cidade' => $f->usuario->id_cidade ?? 4007,
            'cidade' => $f->usuario->cidade->nome ?? '',
            'status' => 'Ativo',
            'produtos' => $f->produtos,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->update($request->all());
        return $fornecedor;
        $fornecedor = Fornecedor::with('usuario')->findOrFail($id);

        if ($fornecedor->usuario) {
            $fornecedor->usuario->update(array_filter([
                'nome' => $request->nome,
                'email' => $request->email,
                'telefone' => $request->telefone,
                'endereco' => $request->endereco,
                'id_cidade' => $request->id_cidade,
            ], fn($v) => !is_null($v)));
        }

        return response()->json([
            'message' => 'Fornecedor atualizado com sucesso!',
            'id' => $fornecedor->id_usuario,
            'id_usuario' => $fornecedor->id_usuario,
            'nome' => $fornecedor->usuario->nome ?? '',
            'email' => $fornecedor->usuario->email ?? '',
            'telefone' => $fornecedor->usuario->telefone ?? '',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->delete();
        return $fornecedor;
        return response()->json(['message' => 'Fornecedor removido com sucesso.'], 200);
    }
}

