<?php

namespace App\Filament\Admin\Resources\Technologies;

use App\Filament\Admin\Resources\Technologies\Pages\CreateTechnologies;
use App\Filament\Admin\Resources\Technologies\Pages\EditTechnologies;
use App\Filament\Admin\Resources\Technologies\Pages\ListTechnologies;
use App\Filament\Admin\Resources\Technologies\Schemas\TechnologiesForm;
use App\Filament\Admin\Resources\Technologies\Tables\TechnologiesTable;
use App\Models\Technologies;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TechnologiesResource extends Resource
{
    protected static ?string $model = Technologies::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Technologies';

    public static function form(Schema $schema): Schema
    {
        return TechnologiesForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TechnologiesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTechnologies::route('/'),
            'create' => CreateTechnologies::route('/create'),
            'edit' => EditTechnologies::route('/{record}/edit'),
        ];
    }
}
