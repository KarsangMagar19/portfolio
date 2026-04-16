<?php

namespace App\Filament\Admin\Resources\Projects\Schemas;

use App\ProjectCategory;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title (English)')
                    ->columnspanfull()
                    ->required(),
                TextInput::make('title_np')
                    ->label('Title (नेपाली)')
                    ->columnspanfull()
                    ->nullable()
                    ->helperText('Nepali translation of the project title.'),
                Textarea::make('short_description')
                    ->columnspanfull()
                    ->nullable(),
                RichEditor::make('description')
                    ->label('Description (English)')
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('description_np')
                    ->label('Description (नेपाली)')
                    ->nullable()
                    ->helperText('Nepali translation of the project description.')
                    ->columnSpanFull(),
                Select::make('category')
                    ->options([
                        ProjectCategory::Mobile->value => 'Mobile',
                        ProjectCategory::Web->value => 'Web',
                        ProjectCategory::Desktop->value => 'Desktop',
                    ])
                    ->required(),
                TextInput::make('live_url')
                    ->url()
                    ->nullable(),

                TextInput::make('github_url')
                    ->url()
                    ->nullable(),
                Select::make('technologies')
                    ->label('Technologies')
                    ->relationship('technologies', 'title')
                    ->multiple()
                    ->searchable()
                    ->preload()
                    ->required()
                    ->createOptionForm([
                        TextInput::make('title')
                            ->required(),
                    ]),
            ]);
    }
}
