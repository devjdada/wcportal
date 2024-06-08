<?php

namespace App\Livewire\Soul;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin')]
class IndexSoul extends Component
{
    public function render()
    {
        return view('livewire.soul.index-soul');
    }
}
