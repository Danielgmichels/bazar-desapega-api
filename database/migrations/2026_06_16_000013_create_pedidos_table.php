<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id_pedido');
            $table->unsignedInteger('id_cliente');
            $table->unsignedInteger('id_status_pedido');
            $table->unsignedInteger('id_tipo_entrega');
            
            $table->dateTime('data_pedido');
            $table->decimal('valor_total', 10, 2);
            $table->timestamps();

            $table->foreign('id_cliente')->references('id_usuario')->on('clientes');
            $table->foreign('id_status_pedido')->references('id_status_pedido')->on('status_pedidos');
            $table->foreign('id_tipo_entrega')->references('id_tipo_entrega')->on('tipos_entrega');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};