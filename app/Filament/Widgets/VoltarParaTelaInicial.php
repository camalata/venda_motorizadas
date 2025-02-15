<?php

namespace App\Filament\Widgets;

use Filament\Forms\Components\DatePicker;
use Filament\Pages\Dashboard\Actions\FilterAction;
use Filament\Widgets\Widget;

class VoltarParaTelaInicial extends Widget
{
    protected static string $view = 'filament.cliente.resources.motas-resource.widgets.voltar-para-tela-inicial';

    public function openNewUserModal()
    {
        redirect('/');
    }
}
