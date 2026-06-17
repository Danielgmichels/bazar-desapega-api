<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoEntregaSeeder extends Seeder
{
    public function run(): void
    {
        $tipos = [
            ['nome' => 'Retirada no Local', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Correios - PAC', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Correios - SEDEX', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Transportadora', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('tipos_entrega')->insert($tipos);
    }
}