<?php

use App\Models\Mota;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $motas = Mota::all()->take(9);

    $motas = $motas->shuffle();
    $marcas = $motas->pluck('marca')->toArray();
    // remova a duplicata da marca
    $marcas = array_unique($marcas);

    return view(
        'index',
        [
            'marcas' => $marcas,
            'motas' => $motas,
        ]
    );
});
