<?php

namespace App\Filament\Cliente\Resources\ReservaResource\Pages;

use App\Filament\Cliente\Resources\ReservaResource;
use App\Models\Mota;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReserva extends EditRecord
{
    protected static string $resource = ReservaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make()
                ->before(function ($record) {
                    $mota = Mota::find($record->mota_id);

                    $mota->quantidade_stock += 1;
                    $mota->save();
                }),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        unset($data['mota']);

        return $data;
    }
}
