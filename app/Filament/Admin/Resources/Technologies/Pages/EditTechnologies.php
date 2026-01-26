<?php

namespace App\Filament\Admin\Resources\Technologies\Pages;

use App\Filament\Admin\Resources\Technologies\TechnologiesResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTechnologies extends EditRecord
{
    protected static string $resource = TechnologiesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
