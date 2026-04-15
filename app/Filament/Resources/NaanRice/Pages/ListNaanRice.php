<?php

namespace App\Filament\Resources\NaanRice\Pages;

use App\Filament\Resources\NaanRice\NaanRiceResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListNaanRice extends ListRecords
{
    protected static string $resource = NaanRiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
