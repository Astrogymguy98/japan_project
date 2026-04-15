<?php

namespace App\Filament\Resources\CurrySets\Pages;

use App\Filament\Resources\CurrySets\CurrySetResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCurrySets extends ListRecords
{
    protected static string $resource = CurrySetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
