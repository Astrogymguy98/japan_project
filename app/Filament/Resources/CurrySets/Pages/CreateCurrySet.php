<?php

namespace App\Filament\Resources\CurrySets\Pages;

use App\Filament\Resources\CurrySets\CurrySetResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCurrySet extends CreateRecord
{
    protected static string $resource = CurrySetResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['slug'] = str($data['title'])->slug();
    return $data;
    }
}
