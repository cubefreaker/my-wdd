<?php

namespace App\Http\Livewire\Theme\Tio;

use Livewire\Component;

class Tema1 extends Component
{
    public function render()
    {
        $data = [
            'title' => 'Tema keren',
        ];
        return view('livewire.theme.tio.tema1', $data)->layout('layouts.theme');
    }
}
