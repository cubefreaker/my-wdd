<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $listUndangan = [];
    
    public function render()
    {
        $this->listUndangan = \App\Models\Undangan::where('status', 'active')->get();
        return view('livewire.home');
    }
}
