<?php

namespace App\Livewire\Gallery;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin')]
class AddImage extends Component
{
    public function render()
    {
        return view('livewire.gallery.add-image');
    }
}
