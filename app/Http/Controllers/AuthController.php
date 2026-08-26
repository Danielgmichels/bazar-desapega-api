<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    // Rota: POST /api/register
    public function register(Request $request)
    {
        // 1. Valida se o front-end mandou os dados corretos
        $request->validate([
            'nome' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:usuarios,email',
            'password' => 'required|string|min:6', // O Front manda 'password', mas salvamos como 'senha'
            'id_cidade' => 'required|exists:cidades,id_cidade',
            'data_nascimento' => 'nullable|date',
            'telefone' => 'nullable|string|max:20',
            'endereco' => 'nullable|string|max:150',
        ]);

        // Inicia a transação com o banco de dados
        DB::beginTransaction();

        try {
            // 2. Cria o Usuário base
            $user = User::create([
                'nome' => $request->nome,
                'email' => $request->email,
                'id_cidade' => $request->id_cidade,
                'data_nascimento' => $request->data_nascimento,
                'telefone' => $request->telefone,
                'endereco' => $request->endereco,
                'is_admin' => false, // Regra de negócio: sempre false no cadastro público
            ]);

            // 3. Cria o perfil de Cliente vinculado ao usuário
            Cliente::create([
                'id_usuario' => $user->id_usuario,
                'senha' => Hash::make($request->password), // Criptografa a senha antes de salvar
            ]);

            // Confirma as inserções no banco
            DB::commit();

            // 4. Gera o Token Sanctum
            $token = $user->createToken('auth_token')->plainTextToken;

            // 5. Retorna a resposta em JSON (Conforme especificado no SDD)
            return response()->json([
                'message' => 'Cliente cadastrado com sucesso!',
                'token' => $token,
                'user' => $user
            ], 201);

        } catch (\Exception $e) {
            // Se der qualquer erro, cancela tudo que foi feito no banco nesta requisição
            DB::rollBack();
            return response()->json(['message' => 'Erro ao cadastrar: ' . $e->getMessage()], 500);
        }
    }

    // Rota: POST /api/login
    public function login(Request $request)
    {
        $request->validate(['email' => 'required|email', 'password' => 'required']);

        $user = User::where('email', $request->email)->first();
        $cliente = Cliente::find($user?->id_usuario);

        // Verifica se o usuário existe, se tem perfil de cliente e se a senha criptografada bate
        if (!$user || !$cliente || !Hash::check($request->password, $cliente->senha)) {
            return response()->json(['message' => 'Credenciais inválidas.'], 401);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Autenticado com sucesso',
            'token' => $token,
            'user' => $user
        ], 200);
    }
}