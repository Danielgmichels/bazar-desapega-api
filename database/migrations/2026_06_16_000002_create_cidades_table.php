<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cidades', function (Blueprint $table) {
            $table->increments('id_cidade');
            $table->unsignedInteger('id_estado'); // Chave estrangeira precisa ser do mesmo tipo da origem (Integer sem sinal negativo)
            $table->string('nome', 100);
            $table->timestamps();

            // Aqui definimos o relacionamento (Foreign Key)
            $table->foreign('id_estado')->references('id_estado')->on('estados')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cidades');
    }
};