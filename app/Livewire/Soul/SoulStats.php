<?php

namespace App\Livewire\Soul;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin')]
class SoulStats extends Component
{
    public function render()
    {
        return view('livewire.soul.soul-stats');
    }
}
