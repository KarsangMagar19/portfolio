<?php

namespace App\Filament\Admin\Resources\Messagemes;

use App\Filament\Admin\Resources\Messagemes\Pages;
use App\Filament\Admin\Resources\Messagemes\Schemas\MessagemeForm;
use App\Filament\Admin\Resources\Messagemes\Schemas\MessagemeInfolist;
use App\Filament\Admin\Resources\Messagemes\Tables\MessagemesTable;
use App\Models\Messageme;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MessagemeResource extends Resource
{
    protected static ?string $model = Messageme::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $navigationLabel = 'Messages';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return MessagemeForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MessagemeInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MessagemesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getNavigationGroup(): string|\UnitEnum|null
    {
        return 'Contact';
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMessagemes::route('/'),
            'view' => Pages\ViewMessageme::route('/{record}'),
        ];
    }
}