<?php

namespace App\Filament\Resources\Companies\Schemas;


use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Components\Section as ComponentsSection;
use Filament\Schemas\Schema;


class CompanyForm
{
    public static function configure(Schema $schema): Schema
    {

        return $schema
            ->schema([
               ComponentsSection::make('Company Info')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        TextInput::make('name')
                        ->columnSpanFull()
                        ->required(),
                        TextInput::make('contact')
                        ->required(),
                        TextInput::make('email')
                        ->label('Email address')
                        ->email()
                        ->required(),
                        FileUpload::make('logo')
                            ->default(null),
                    ]),

                // Keep these inside the main schema array
             ComponentsSection::make('Social Media')
             ->columnSpanFull()
             ->columns(2)
             ->schema([
                TextInput::make('facebook')
                    ->default(null),
                TextInput::make('instagram')
                    ->default(null),
                TextInput::make('line')
                    ->default(null),
             ]),
             Repeater::make("Branches")
                ->relationship("Branches")
                ->schema([
                    TextInput::make('name')
                     ->required(),
                    TextInput::make('address')
                        ->required(),
                    TextInput::make('contact')
                        ->required(),
                ])
                ->default([]),
            ]);
    }
}
