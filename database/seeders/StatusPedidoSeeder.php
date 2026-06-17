<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusPedidoSeeder extends Seeder
{
    public function run(): void
    {
        $status = [
            ['nome' => 'Aguardando Pagamento', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Pagamento Aprovado', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Em Separação', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Enviado', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Entregue', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Cancelado', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('status_pedidos')->insert($status);
    }
}