<?php

namespace App\Filament\Admin\Resources\Skills\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SkillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Name (English)')
                    ->required()
                    ->maxLength(255),

                TextInput::make('name_np')
                    ->label('Name (नेपाली)')
                    ->nullable()
                    ->maxLength(255)
                    ->helperText('Nepali translation of the skill name.'),

                Select::make('category')
                    ->required()
                    ->options([
                        'Frontend Development'   => 'Frontend Development',
                        'Backend Development'    => 'Backend Development',
                        'Database & Storage'     => 'Database & Storage',
                        'Tools & Technologies'   => 'Tools & Technologies',
                        'Additional Skills'      => 'Additional Skills',
                    ]),

                TextInput::make('proficiency')
                    ->label('Proficiency (%)')
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(100)
                    ->helperText('Leave blank for badge-style skills (Additional Skills category).'),
            ]);
    }
}
