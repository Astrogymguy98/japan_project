<?php

namespace App\Filament\Resources\CurrySets\Pages;

use App\Filament\Resources\CurrySets\CurrySetResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCurrySet extends EditRecord
{
    protected static string $resource = CurrySetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
