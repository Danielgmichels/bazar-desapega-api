<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('item_pedidos', function (Blueprint $table) {
            $table->increments('id_item_pedido');
            $table->unsignedInteger('id_pedido');
            $table->unsignedInteger('id_produto')->unique(); // A Regra de Ouro do Bazar!
            $table->timestamps();

            $table->foreign('id_pedido')->references('id_pedido')->on('pedidos')->onDelete('cascade');
            $table->foreign('id_produto')->references('id_produto')->on('produtos');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('item_pedidos');
    }
};