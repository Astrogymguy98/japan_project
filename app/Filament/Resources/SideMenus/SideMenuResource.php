<?php

namespace App\Filament\Resources\SideMenus;

use App\Filament\Resources\SideMenus\Pages\CreateSideMenu;
use App\Filament\Resources\SideMenus\Pages\EditSideMenu;
use App\Filament\Resources\SideMenus\Pages\ListSideMenus;
use App\Filament\Resources\SideMenus\Schemas\SideMenuForm;
use App\Filament\Resources\SideMenus\Tables\SideMenusTable;
use App\Models\SideMenu;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SideMenuResource extends Resource
{
    protected static ?string $model = SideMenu::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return SideMenuForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SideMenusTable::configure($table);
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
            'index' => ListSideMenus::route('/'),
            'create' => CreateSideMenu::route('/create'),
            'edit' => EditSideMenu::route('/{record}/edit'),
        ];
    }
}
