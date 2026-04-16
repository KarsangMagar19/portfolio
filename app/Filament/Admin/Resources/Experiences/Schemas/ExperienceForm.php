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
                    ->label('Title (English)')
                    ->required(),
                TextInput::make('title_np')
                    ->label('Title (नेपाली)')
                    ->nullable()
                    ->helperText('Nepali translation of the job title.'),
                TextInput::make('company')
                    ->label('Company (English)')
                    ->required(),
                TextInput::make('company_np')
                    ->label('Company (नेपाली)')
                    ->nullable()
                    ->helperText('Nepali translation of the company name.'),
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
                    ->label('Description (English)')
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('description_np')
                    ->label('Description (नेपाली)')
                    ->nullable()
                    ->helperText('Nepali translation of the job description.')
                    ->columnSpanFull(),
            ]);
    }
}
