<?php

namespace App\Http\Livewire;

use App\Models\UserUndanganDetail;
use Livewire\Component;

class Undangan extends Component
{
    public $title;
    public $themeClass;
    public $detailUndangan;

    public function mount($slug)
    {
        $this->detailUndangan = UserUndanganDetail::where('slug', $slug)->first();
    }

    public function render()
    {        
        if(!$this->detailUndangan) {
            abort(404);
        }

        if($this->detailUndangan->status == 'draft' && !auth()->user()) {
            abort(404);
        }

        $this->title = "The Wedding of {$this->detailUndangan->groom_short_name} & {$this->detailUndangan->bride_short_name}";
        $this->themeClass = $this->detailUndangan->undangan->custom_css_class ?? '';
        
        return view($this->detailUndangan->undangan->laravel_view_path)->layout('layouts.theme');
    }
}
