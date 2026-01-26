<?php

namespace App\Filament\Admin\Resources\Personalinfos\Pages;

use App\Filament\Admin\Resources\Personalinfos\PersonalinfoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPersonalinfos extends ListRecords
{
    protected static string $resource = PersonalinfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
