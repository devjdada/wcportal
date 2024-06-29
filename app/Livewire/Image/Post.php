<?php

namespace App\Livewire\Image;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.admin')]
class Post extends Component
{
    use WithFileUploads;
    #[Validate(['photos.*' => 'image|max:1024'])]
    public $photos = [];

    public function save()
    {
        foreach ($this->photos as $photo) {
            $photo->store(path: 'photos');
        }
    }
    public function render()
    {
        return view('livewire.image.post');
    }
}
