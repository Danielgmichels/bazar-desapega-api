<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Chamamos todos os nossos seeders aqui!
        $this->call([
            EstadoSeeder::class,
            CidadeSeeder::class,
            TipoProdutoSeeder::class,
            GeneroSeeder::class,
            StatusDisponibilidadeSeeder::class,
            StatusPedidoSeeder::class,
            TipoEntregaSeeder::class,
        ]);
    }
}