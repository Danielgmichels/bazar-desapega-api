<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneroSeeder extends Seeder
{
    public function run(): void
    {
        $generos = [
            ['nome' => 'Feminino', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Masculino', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Unissex', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Infantil', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('generos')->insert($generos);
    }
}