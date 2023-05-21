<?php

namespace App\Filament\Resources\UndanganGroupResource\Pages;

use App\Filament\Resources\UndanganGroupResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUndanganGroup extends EditRecord
{
    protected static string $resource = UndanganGroupResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Undangan Group Updated';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
