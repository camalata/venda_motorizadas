<?php

use App\Models\Mota;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $motas = Mota::orderBy('created_at', 'desc')->get();

    // $motas = $motas->shuffle();
    $marcas = $motas->pluck('marca')->toArray();
    $marcas = array_unique($marcas);

    return view(
        'index',
        [
            'marcas' => $marcas,
            'motas' => $motas,
        ]
    );
});
