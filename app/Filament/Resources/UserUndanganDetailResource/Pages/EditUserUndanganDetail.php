<?php

namespace App\Filament\Resources\UserUndanganDetailResource\Pages;

use App\Filament\Resources\UserUndanganDetailResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserUndanganDetail extends EditRecord
{
    protected static string $resource = UserUndanganDetailResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
    
    protected function getCreatedNotificationTitle(): ?string
    {
        return 'User Undangan Detail Updated';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
