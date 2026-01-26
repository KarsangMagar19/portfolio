<?php

namespace App\Filament\Admin\Resources\Personalinfos;

use App\Filament\Admin\Resources\Personalinfos\Pages\CreatePersonalinfo;
use App\Filament\Admin\Resources\Personalinfos\Pages\EditPersonalinfo;
use App\Filament\Admin\Resources\Personalinfos\Pages\ListPersonalinfos;
use App\Filament\Admin\Resources\Personalinfos\Schemas\PersonalinfoForm;
use App\Filament\Admin\Resources\Personalinfos\Tables\PersonalinfosTable;
use App\Models\Personalinfo;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PersonalinfoResource extends Resource
{
    protected static ?string $model = Personalinfo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Personalinfo';

    public static function form(Schema $schema): Schema
    {
        return PersonalinfoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PersonalinfosTable::configure($table);
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
            'index' => ListPersonalinfos::route('/'),
            'create' => CreatePersonalinfo::route('/create'),
            'edit' => EditPersonalinfo::route('/{record}/edit'),
        ];
    }
}
