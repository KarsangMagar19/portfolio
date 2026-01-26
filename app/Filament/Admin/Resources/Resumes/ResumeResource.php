<?php

namespace App\Filament\Admin\Resources\Resumes;

use App\Filament\Admin\Resources\Resumes\Pages\CreateResume;
use App\Filament\Admin\Resources\Resumes\Pages\EditResume;
use App\Filament\Admin\Resources\Resumes\Pages\ListResumes;
use App\Filament\Admin\Resources\Resumes\Schemas\ResumeForm;
use App\Filament\Admin\Resources\Resumes\Tables\ResumesTable;
use App\Models\Resume;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ResumeResource extends Resource
{
    protected static ?string $model = Resume::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Resume';

    public static function form(Schema $schema): Schema
    {
        return ResumeForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ResumesTable::configure($table);
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
            'index' => ListResumes::route('/'),
            'create' => CreateResume::route('/create'),
            'edit' => EditResume::route('/{record}/edit'),
        ];
    }
}
