<?php

use App\Models\Marca;
use App\Models\Mota;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $motas = Mota::all();

    // $motas = $motas->shuffle();
    $marcas = Marca::all()->pluck('nome')->toArray();
    $marcas = array_unique($marcas);

    $motas = $motas->shuffle();

    return view(
        'index',
        [
            'marcas' => $marcas,
            'motas' => $motas,
        ]
    );
});
