<?php

namespace App\Filament\Admin\Resources\Experiences\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ExperienceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('title')
                    ->required(),
                TextInput::make('company')
                    ->required(),
                DatePicker::make('start_date')
                    ->date()
                    ->required(),
                Toggle::make('is_current')
                    ->default(true)
                    ->required()
                    ->live(),
                DatePicker::make('end_date')
                    ->date()
                    ->nullable()
                    ->disabled(fn ($get) => $get('is_current') === true),
                RichEditor::make('description')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
