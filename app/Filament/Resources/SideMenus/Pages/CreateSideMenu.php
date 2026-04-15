<?php

namespace App\Filament\Resources\SideMenus\Pages;

use App\Filament\Resources\SideMenus\SideMenuResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSideMenu extends CreateRecord
{
    protected static string $resource = SideMenuResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['slug'] = str($data['title'])->slug();
    return $data;
    }
}
