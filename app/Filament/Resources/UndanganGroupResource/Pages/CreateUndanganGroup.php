<?php

namespace App\Filament\Resources\UndanganGroupResource\Pages;

use App\Filament\Resources\UndanganGroupResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUndanganGroup extends CreateRecord
{
    protected static string $resource = UndanganGroupResource::class;

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Undangan Group Created';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
