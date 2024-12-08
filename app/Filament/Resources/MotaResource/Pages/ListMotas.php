<?php

namespace App\Filament\Resources\MotaResource\Pages;

use App\Filament\Resources\MotaResource;
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
