<?php

namespace App\Filament\Resources\MotaResource\Pages;

use App\Filament\Resources\MotaResource;
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
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
