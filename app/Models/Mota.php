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

    public function modelo()
    {
        return $this->belongsTo(Modelo::class);
    }


    public function marca()
    {
        return $this->hasOneThrough(
            Marca::class,   // Modelo final que queremos acessar
            Modelo::class,  // Modelo intermediário
            'id',           // Chave primária do Modelo
            'id',           // Chave primária da Marca
            'modelo_id',    // Chave estrangeira em Motas
            'marca_id'      // Chave estrangeira em Modelos
        );
    }
}
