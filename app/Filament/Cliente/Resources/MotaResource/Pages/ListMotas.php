<?php

namespace App\Filament\Cliente\Resources\MotaResource\Pages;

use App\Filament\Cliente\Resources\MotaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMotas extends ListRecords
{
    protected static string $resource = MotaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

}
