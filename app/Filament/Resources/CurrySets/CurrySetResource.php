<?php

namespace App\Filament\Resources\CurrySets;

use App\Filament\Resources\CurrySets\Pages\CreateCurrySet;
use App\Filament\Resources\CurrySets\Pages\EditCurrySet;
use App\Filament\Resources\CurrySets\Pages\ListCurrySets;
use App\Filament\Resources\CurrySets\Schemas\CurrySetForm;
use App\Filament\Resources\CurrySets\Tables\CurrySetsTable;
use App\Models\CurrySet;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CurrySetResource extends Resource
{
    protected static ?string $model = CurrySet::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return CurrySetForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CurrySetsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCurrySets::route('/'),
            'create' => CreateCurrySet::route('/create'),
            'edit' => EditCurrySet::route('/{record}/edit'),
        ];
    }
}
