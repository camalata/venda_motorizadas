<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mota extends Model
{
    /** @use HasFactory<\Database\Factories\MotaFactory> */
    use HasFactory;
    use SoftDeletes;

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
}
