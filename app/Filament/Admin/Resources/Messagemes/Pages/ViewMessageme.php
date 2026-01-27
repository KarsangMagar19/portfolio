<?php

namespace App\Filament\Admin\Resources\Messagemes\Pages;

use App\Filament\Admin\Resources\Messagemes\MessagemeResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMessageme extends ViewRecord
{
    protected static string $resource = MessagemeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
