<?php

namespace App\Filament\Resources\UserUndanganDetailResource\Pages;

use App\Filament\Resources\UserUndanganDetailResource;
use App\Models\UserUndanganDetail;
use Filament\Notifications\Notification;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUserUndanganDetail extends CreateRecord
{
    protected static string $resource = UserUndanganDetailResource::class;

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'User undangan created';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function beforeFill(): void
    {
        if(auth()->user()->hasRole('User') && UserUndanganDetail::where('user_id', auth()->user()->id)->count() > 0){
            Notification::make()->title('Undangan sudah dibuat')->warning()->send();
            $this->redirect($this->getResource()::getUrl('index'));
        }
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
    
        return $data;
    }
}
