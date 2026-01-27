<?php

namespace App\Filament\Admin\Resources\Messagemes\Pages;

use App\Filament\Admin\Resources\Messagemes\MessagemeResource;
use Filament\Resources\Pages\ListRecords;

class ListMessagemes extends ListRecords
{
    protected static string $resource = MessagemeResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
