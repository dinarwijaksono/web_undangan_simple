<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\FormConfirmation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class FormConfirmationTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(FormConfirmation::class);

        $component->assertStatus(200);
    }
}
