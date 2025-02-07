<?php

namespace App\Filament\Cliente\Resources\MotaResource\Pages;

use App\Filament\Cliente\Resources\MotaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMota extends EditRecord
{
    protected static string $resource = MotaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
