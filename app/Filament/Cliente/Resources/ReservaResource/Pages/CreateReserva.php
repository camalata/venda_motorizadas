<?php

namespace App\Filament\Cliente\Resources\ReservaResource\Pages;

use App\Filament\Cliente\Resources\ReservaResource;
use App\Models\Cliente;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateReserva extends CreateRecord
{
    protected static string $resource = ReservaResource::class;

    protected function mutateFormDataBeforeFill(array $data): array
    {
        // Captura valores da URL, por exemplo, ?category_id=3&supplier_id=2
        $data['motas_id'] = '5';

        return $data;
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['cliente_id'] = Cliente::where('user_id', Auth::user()->id)->first()->id;
        $data['status'] = 'pendente';

        return $data;
    }
}
