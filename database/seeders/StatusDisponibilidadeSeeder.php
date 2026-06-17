<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusDisponibilidadeSeeder extends Seeder
{
    public function run(): void
    {
        $status = [
            ['nome' => 'Disponível', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Reservado', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Vendido', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('status_disponibilidades')->insert($status);
    }
}