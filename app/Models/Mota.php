<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mota extends Model
{
    /** @use HasFactory<\Database\Factories\MotaFactory> */
    use HasFactory;

    protected function reservas()
    {
        return $this->hasMany(Reserva::class);
    }

}
