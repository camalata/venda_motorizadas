<?php

namespace App\Filament\Cliente\Resources\ReservaResource\Pages;

use App\Filament\Cliente\Resources\ReservaResource;
use App\Models\Cliente;
use App\Models\Mota;
use Filament\Actions;
use Filament\Actions\Modal\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateReserva extends CreateRecord
{

    public function __construct() {
        session()->forget('mota_id');
    }

    protected static string $resource = ReservaResource::class;

    protected function mutateFormDataBeforeFill(array $data): array
    {
        // Captura valores da URL, por exemplo, ?category_id=3&supplier_id=2
        $data['motas_id'] = '5';

        return $data;
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {

        $mota = Mota::find($data['mota_id']);

        // if stock is 0, return error message
        if ($mota->quantidade_stock <= 0) {
            Notification::make()
                ->warning()
                ->title('Stoque insuficiente para reservar')
                ->body('A motorizada selecionada nao tem unidades disponiveis para reserva')
                ->persistent()
                ->send();

            $this->halt();
            return [];
        }

        $mota->quantidade_stock -= 1;
        $mota->save();

        $newData = [];
        $newData['cliente_id'] = Cliente::where('user_id', Auth::user()->id)->first()->id;
        $newData['status'] = 'pendente';
        $newData['data_reserva'] = $data['data_reserva'];
        $newData['mota_id'] = $data['mota_id'];

        session()->forget('mota_id');

        return $newData;
    }
}
