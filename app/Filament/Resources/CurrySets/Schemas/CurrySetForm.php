<?php

namespace App\Filament\Resources\CurrySets\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CurrySetForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
               Section::make('Curry Set Info')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                         TextInput::make('title')
                    ->required(),
                    TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('Rs.'),
                    TextInput::make('discount')
                    ->required()
                    ->numeric()
                    ->suffix('%'),
                    FileUpload::make('image')
                        ->image()
                        ->required(),
                    ])
            ]);
    }
}
