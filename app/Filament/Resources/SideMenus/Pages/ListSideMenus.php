<?php

namespace App\Filament\Resources\SideMenus\Pages;

use App\Filament\Resources\SideMenus\SideMenuResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSideMenus extends ListRecords
{
    protected static string $resource = SideMenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
