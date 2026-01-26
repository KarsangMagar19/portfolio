<?php

namespace App\Filament\Admin\Resources\Personalinfos\Pages;

use App\Filament\Admin\Resources\Personalinfos\PersonalinfoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPersonalinfo extends EditRecord
{
    protected static string $resource = PersonalinfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
