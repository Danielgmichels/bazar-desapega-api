<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Fornecedor;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Criar um usuário base para ser o fornecedor
        // O método 'firstOrCreate' só cria se o email não existir ainda
        $user = User::firstOrCreate(
            ['email' => 'fornecedor@bazar.com'],
            [
                'nome' => 'Fornecedor Parceiro Padrão',
                'id_cidade' => 1, // Atrelamos a cidade com ID 1 (ex: São Paulo)
                'telefone' => '11999999999',
                'is_admin' => false,
            ]
        );

        // 2. Vincular este usuário como um fornecedor (Herança 1:1)
        $fornecedor = Fornecedor::firstOrCreate([
            'id_usuario' => $user->id_usuario
        ]);

        // 3. Mágica da Factory! Cria 20 produtos de uma vez só, 
        // substituindo o 'id_fornecedor' pelo ID do cara que acabamos de criar.
        Produto::factory()->count(20)->create([
            'id_fornecedor' => $fornecedor->id_usuario
        ]);
    }
}