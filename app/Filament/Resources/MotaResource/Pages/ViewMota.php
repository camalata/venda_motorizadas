<?php

namespace App\Filament\Resources\MotaResource\Pages;

use App\Filament\Resources\MotaResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMota extends ViewRecord
{
    protected static string $resource = MotaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
