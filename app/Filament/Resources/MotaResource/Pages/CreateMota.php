<?php

namespace App\Filament\Resources\MotaResource\Pages;

use App\Filament\Resources\MotaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMota extends CreateRecord
{
    protected static string $resource = MotaResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['disponivel'] = true;

        return $data;
    }

}
