<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\ShowListSaying1;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ShowListSaying1Test extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(ShowListSaying1::class);

        $component->assertStatus(200);
    }
}
