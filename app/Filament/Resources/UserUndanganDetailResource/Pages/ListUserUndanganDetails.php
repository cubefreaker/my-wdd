<?php

namespace App\Filament\Resources\UserUndanganDetailResource\Pages;

use App\Filament\Resources\UserUndanganDetailResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserUndanganDetails extends ListRecords
{
    protected static string $resource = UserUndanganDetailResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
