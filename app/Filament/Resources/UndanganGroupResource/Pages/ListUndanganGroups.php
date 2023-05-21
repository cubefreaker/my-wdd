<?php

namespace App\Filament\Resources\UndanganGroupResource\Pages;

use App\Filament\Resources\UndanganGroupResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUndanganGroups extends ListRecords
{
    protected static string $resource = UndanganGroupResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
