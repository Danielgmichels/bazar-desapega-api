<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoProdutoSeeder extends Seeder
{
    public function run(): void
    {
        $tipos = [
            ['nome' => 'Camiseta/Blusa', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Calça', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Vestido', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Jaqueta/Casaco', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Bermuda/Shorts', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Calçado', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Acessório', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Insere todos os tipos na tabela de uma vez só
        DB::table('tipos_produto')->insert($tipos);
    }
}