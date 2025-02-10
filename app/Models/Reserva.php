<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    /** @use HasFactory<\Database\Factories\ReservaFactory> */
    use HasFactory;

    public function mota()
    {
        return $this->belongsTo(Mota::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public static function criarReserva(array $data): Reserva|string
    {
        $mota = Mota::find($data['mota_id']);

        if (!$mota) {
            return 'Mota não encontrada.';
        }

        if ($mota->quantidade_stock <= 0) {
            return 'Estoque insuficiente.';
        }

        \DB::beginTransaction();
        try {
            $reserva = Reserva::create($data);
            $mota->quantidade_stock--;
            $mota->save();

            \DB::commit();
            return $reserva;
        } catch (\Exception $e) {
            \DB::rollback();
            return 'Erro ao criar reserva: ' . $e->getMessage();
        }
    }
}
