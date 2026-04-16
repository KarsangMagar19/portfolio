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
                    ->label('Degree Name (English)')
                    ->required(),
                TextInput::make('degree_name_np')
                    ->label('Degree Name (नेपाली)')
                    ->nullable()
                    ->helperText('Nepali translation of the degree name.'),
                TextInput::make('university_name')
                    ->label('University Name (English)')
                    ->required(),
                TextInput::make('university_name_np')
                    ->label('University Name (नेपाली)')
                    ->nullable()
                    ->helperText('Nepali translation of the university name.'),
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
                    ->label('Description (English)')
                    ->required(),
                TextInput::make('description_np')
                    ->label('Description (नेपाली)')
                    ->nullable()
                    ->helperText('Nepali translation of the description.'),
            ]);
    }
}
