<?php

namespace App\Http\Livewire\Theme;

use App\Models\UserUndanganDetail;
use Livewire\Component;

class Theme1 extends Component
{
    public function render()
    {
        $data = [
            'title' => 'Sample Undangan',
            'themeClass' => 'main-theme1',
            'detailUndangan' => UserUndanganDetail::where('is_sample', 1)->first(),
        ];
        return view('livewire.theme.theme1', $data)->layout('layouts.theme');
    }
}
