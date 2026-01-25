<?php

namespace App\Filament\Admin\Resources\Personalinfos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
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
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                TextInput::make('address')
                    ->required(),
                Textarea::make('short_bio')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('available')
                    ->required(),
            ]);
    }
}
