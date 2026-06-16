<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            // Atenção aqui: não usamos increments() pois o ID não é gerado aqui. Ele vem de 'usuarios'.
            $table->unsignedInteger('id_usuario')->primary(); // É Chave Primária...
            $table->string('senha', 255);
            $table->timestamps();

            // ... e é Chave Estrangeira ao mesmo tempo!
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};