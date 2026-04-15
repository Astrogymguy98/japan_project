<?php

namespace App\Filament\Resources\NaanRice;

use App\Filament\Resources\NaanRice\Pages\CreateNaanRice;
use App\Filament\Resources\NaanRice\Pages\EditNaanRice;
use App\Filament\Resources\NaanRice\Pages\ListNaanRice;
use App\Filament\Resources\NaanRice\Schemas\NaanRiceForm;
use App\Filament\Resources\NaanRice\Tables\NaanRiceTable;
use App\Models\NaanRice;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class NaanRiceResource extends Resource
{
    protected static ?string $model = NaanRice::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return NaanRiceForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return NaanRiceTable::configure($table);
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
            'index' => ListNaanRice::route('/'),
            'create' => CreateNaanRice::route('/create'),
            'edit' => EditNaanRice::route('/{record}/edit'),
        ];
    }
}
