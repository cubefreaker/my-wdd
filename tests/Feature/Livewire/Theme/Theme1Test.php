<?php

namespace Tests\Feature\Livewire\Theme;

use App\Http\Livewire\Theme\Theme1;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class Theme1Test extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Theme1::class);

        $component->assertStatus(200);
    }
}
