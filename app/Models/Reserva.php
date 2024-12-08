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
}
