<?php

namespace App\Filament\Resources\UserUndanganDetailResource\Pages;

use App\Filament\Resources\UserUndanganDetailResource;
use App\Models\UserUndanganDetail;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserUndanganDetails extends ListRecords
{
    protected static string $resource = UserUndanganDetailResource::class;

    protected function getActions(): array
    {
        $actionList = [];
        if(!auth()->user()->hasRole('User')) {
            $actionList[] = Actions\CreateAction::make();
        } else if(auth()->user()->hasRole('User') && UserUndanganDetail::where('user_id', auth()->user()->id)->count() == 0){
            $actionList[] = Actions\CreateAction::make();
        }
        
        return $actionList;
    }
}
