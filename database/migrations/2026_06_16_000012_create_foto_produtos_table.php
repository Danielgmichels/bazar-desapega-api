<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('foto_produtos', function (Blueprint $table) {
            $table->increments('id_foto');
            $table->unsignedInteger('id_produto');
            $table->string('caminho_arquivo', 255);
            $table->timestamps();

            $table->foreign('id_produto')->references('id_produto')->on('produtos')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('foto_produtos');
    }
};