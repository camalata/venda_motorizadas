<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * id (integer): Identificador único.
     * nome (string): Nome ou modelo da motorizada.
     * preco (decimal): Preço da motorizada.
     * descricao (text): Descrição detalhada da motorizada.
     * disponivel (boolean): Indica se a motorizada está disponível para reserva.
     * imagem (string): Caminho para a imagem da motorizada.
     */
    public function up(): void
    {
        Schema::create('motas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('marca');
            $table->decimal('preco');
            $table->text('descricao');
            $table->boolean('disponivel');
            $table->string('imagem_url');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motas');
    }
};
