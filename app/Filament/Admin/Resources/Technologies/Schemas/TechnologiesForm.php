<?php

namespace App\Filament\Admin\Resources\Technologies\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TechnologiesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
            ]);
    }
}
