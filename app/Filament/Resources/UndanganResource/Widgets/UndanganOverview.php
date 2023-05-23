<?php

namespace App\Filament\Resources\UndanganResource\Widgets;

use App\Models\Undangan;
use App\Models\UserUndanganDetail;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class UndanganOverview extends StatsOverviewWidget
{
    // protected static string $view = 'filament.resources.undangan-resource.widgets.undangan-overview';

    protected function getCards(): array
    {
        return [
            Card::make('Total Tema Undangan', Undangan::all()->count()),
            Card::make('Total Undangan User', UserUndanganDetail::where('is_sample', 0)->where(function($query){
                if(auth()->user()->hasRole('User')){
                    $query->where('user_id', auth()->id());
                }
            })->count()),
        ];
    }
}
