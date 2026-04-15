<?php

namespace App\Filament\Resources\NaanRice\Pages;

use App\Filament\Resources\NaanRice\NaanRiceResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditNaanRice extends EditRecord
{
    protected static string $resource = NaanRiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
