<?php

namespace App\Http\Livewire\Theme\Wisnu;

use App\Models\UserUndanganDetail;
use Livewire\Component;

class Tema1 extends Component
{
    public function render()
    {
        $data = [
            'title' => 'Sample Undangan',
            'detailUndangan' => UserUndanganDetail::where('is_sample', 1)->first(),
        ];
        return view('livewire.theme.wisnu.tema1', $data)->layout('layouts.theme');
    }
}
