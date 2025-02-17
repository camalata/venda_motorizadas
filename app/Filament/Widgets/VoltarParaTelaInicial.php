<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;

class VoltarParaTelaInicial extends Widget
{
    protected static string $view = 'filament.cliente.resources.motas-resource.widgets.voltar-para-tela-inicial';

    public function openNewUserModal()
    {
        Auth::logout();
        redirect('/');
    }
}
