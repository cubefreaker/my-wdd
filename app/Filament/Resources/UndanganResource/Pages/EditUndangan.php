<?php

namespace App\Filament\Resources\UndanganResource\Pages;

use App\Filament\Resources\UndanganResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUndangan extends EditRecord
{
    protected static string $resource = UndanganResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Undangan Updated';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
