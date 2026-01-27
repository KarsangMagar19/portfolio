<?php

namespace App\Filament\Admin\Resources\Education\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class EducationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('degree_name')
                    ->required(),
                TextInput::make('university_name')
                    ->required(),
                DatePicker::make('start_date')
                    ->required(),
                Toggle::make('is_current')
                    ->label('Currently studying here')
                    ->default(false)
                    ->live(),
                DatePicker::make('end_date')
                    ->nullable()
                    ->disabled(fn ($get) => $get('is_current') === true),
                TextInput::make('description')
                    ->required(),
            ]);
    }
}
