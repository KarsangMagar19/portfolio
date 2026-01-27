<?php

namespace App\Filament\Admin\Resources\Messagemes\Pages;

use App\Filament\Admin\Resources\Messagemes\MessagemeResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditMessageme extends EditRecord
{
    protected static string $resource = MessagemeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
