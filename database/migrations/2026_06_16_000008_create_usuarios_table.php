<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id_usuario'); // PK (Auto-incremento)
            $table->unsignedInteger('id_cidade'); // FK para cidades
            
            $table->string('nome', 100);
            $table->date('data_nascimento')->nullable(); // nullable = permite campo vazio (NULL)
            $table->string('telefone', 20)->nullable();
            $table->string('email', 100)->unique(); // Não permite emails repetidos
            $table->string('endereco', 150)->nullable();
            $table->boolean('is_admin')->default(false); // Por padrão, ninguém é admin
            
            $table->timestamps();

            $table->foreign('id_cidade')->references('id_cidade')->on('cidades');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};