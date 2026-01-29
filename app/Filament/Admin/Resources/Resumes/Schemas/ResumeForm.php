<?php

namespace App\Filament\Admin\Resources\Resumes\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class ResumeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('Resume_file_name')
                    ->label(' UploadResume File')
                    ->columnSpanFull()
                    ->acceptedFileTypes(['application/pdf'])
                    ->maxSize(1024)
                    ->disk('public') // Store in public disk
                    ->visibility('public')
                    ->required(),
            ]);
    }
}
