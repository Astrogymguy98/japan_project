<?php

namespace App\Filament\Resources\NaanRice\Pages;

use App\Filament\Resources\NaanRice\NaanRiceResource;
use Filament\Resources\Pages\CreateRecord;

class CreateNaanRice extends CreateRecord
{
    protected static string $resource = NaanRiceResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['slug'] = str($data['title'])->slug();
    return $data;
    }
}
