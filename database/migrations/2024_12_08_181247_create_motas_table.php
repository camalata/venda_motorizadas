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
            $table->enum('cor', ['preta', 'branca', 'amarela', 'vermelha', 'azul', 'verde', 'outro']);
            $table->double('preco');
            $table->double('cilindragem');
            $table->double('capacidade');
            $table->text('descricao');
            $table->boolean('disponivel');
            $table->string('imagem_url');
            $table->foreignId('modelo_id')->constrained();
            $table->integer('quantidade_stock')->default(0);
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
