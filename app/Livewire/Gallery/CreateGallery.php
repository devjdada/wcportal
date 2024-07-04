<?php

namespace App\Livewire\Gallery;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class CreateGallery extends Component
{
    public function render()
    {
        return view('livewire.gallery.create-gallery');
    }
}
