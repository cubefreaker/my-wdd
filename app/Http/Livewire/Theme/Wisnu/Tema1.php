<?php

namespace App\Http\Livewire\Theme\Wisnu;

use Livewire\Component;

class Tema1 extends Component
{
    public function render()
    {
        $data = [
            'title' => 'Tema1',
        ];
        return view('livewire.theme.wisnu.tema1', $data)->layout('layouts.theme');
    }
}
