<?php

namespace App\Filament\Admin\Resources\Personalinfos\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PersonalinfoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('first_name')
                    ->required(),
                TextInput::make('last_name')
                    ->required(),
                Textarea::make('short_bio')
                    ->label('Short Bio (English)')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('short_bio_np')
                    ->label('Short Bio (नेपाली)')
                    ->nullable()
                    ->helperText('Nepali translation of the short bio.')
                    ->columnSpanFull(),
                RichEditor::make('long_bio')
                    ->label('Long Bio (English)')
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('long_bio_np')
                    ->label('Long Bio (नेपाली)')
                    ->nullable()
                    ->helperText('Nepali translation of the long bio.')
                    ->columnSpanFull(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                Toggle::make('is_available')
                    ->label('Available for opportunities')
                    ->default(true),
                FileUpload::make('image')
                    ->columnSpanFull()
                    ->image()
                    ->required(),
            ]);
    }
}
