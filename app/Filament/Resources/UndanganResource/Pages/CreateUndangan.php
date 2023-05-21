<?php

namespace App\Filament\Resources\UndanganResource\Pages;

use App\Filament\Resources\UndanganResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUndangan extends CreateRecord
{
    protected static string $resource = UndanganResource::class;

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Undangan Created';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
