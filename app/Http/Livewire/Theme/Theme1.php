<?php

namespace App\Http\Livewire\Theme;

use Livewire\Component;

class Theme1 extends Component
{
    public function render()
    {
        $data = [
            'title' => 'Theme 1',
            'themeClass' => 'main-theme1'
        ];
        return view('livewire.theme.theme1', $data)->layout('layouts.theme');
    }
}
