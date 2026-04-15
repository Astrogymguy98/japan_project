<?php

namespace App\Filament\Resources\SideMenus\Pages;

use App\Filament\Resources\SideMenus\SideMenuResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSideMenu extends EditRecord
{
    protected static string $resource = SideMenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
