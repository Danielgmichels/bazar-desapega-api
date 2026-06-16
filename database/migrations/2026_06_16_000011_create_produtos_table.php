<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id_produto');
            
            // Chaves Estrangeiras
            $table->unsignedInteger('id_fornecedor');
            $table->unsignedInteger('id_tipo');
            $table->unsignedInteger('id_genero');
            $table->unsignedInteger('id_status_disp');
            
            // Dados do Produto
            $table->date('data_entrada');
            $table->string('marca', 50)->nullable();
            $table->string('tamanho', 10);
            $table->string('cor', 30);
            $table->decimal('preco_custo', 10, 2); // DECIMAL(10,2) para valores monetários
            $table->decimal('preco_venda', 10, 2);
            $table->string('foto_principal', 255);
            
            $table->timestamps();

            // Relacionamentos
            $table->foreign('id_fornecedor')->references('id_usuario')->on('fornecedores');
            $table->foreign('id_tipo')->references('id_tipo')->on('tipos_produto');
            $table->foreign('id_genero')->references('id_genero')->on('generos');
            $table->foreign('id_status_disp')->references('id_status_disp')->on('status_disponibilidades');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};