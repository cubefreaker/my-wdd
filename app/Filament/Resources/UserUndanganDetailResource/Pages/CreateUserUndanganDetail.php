<?php

namespace App\Filament\Resources\UserUndanganDetailResource\Pages;

use App\Filament\Resources\UserUndanganDetailResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUserUndanganDetail extends CreateRecord
{
    protected static string $resource = UserUndanganDetailResource::class;
    
    protected function getCreatedNotificationTitle(): ?string
    {
        return 'User Undangan Detail Created';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
