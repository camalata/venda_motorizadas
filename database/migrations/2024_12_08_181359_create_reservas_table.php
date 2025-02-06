<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * id (integer): Identificador único.
     * usuario_id (integer): Chave estrangeira para o usuário que fez a reserva.
     * mota_id (integer): Chave estrangeira para a motorizada reservada.
     * data_reserva (datetime): Data em que a reserva foi feita.
     * status (enum): Status da reserva (pendente, confirmada, cancelada).
     */
    public function up(): void
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->datetime('data_reserva');
            $table->enum('status', ['pendente', 'reservada', 'cancelada', 'estoque insuficiente'])->default('pendente');
            $table->foreignId('mota_id')->constrained();
            $table->foreignId('cliente_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
