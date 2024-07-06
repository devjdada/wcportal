<?php

namespace App\Livewire\Gallery;

use App\Models\Gallery;
use App\Models\Img;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.admin')]

class Galleries extends Component
{
    public $newGalleryModal = false;
    public $addMoreImageModal = false;
    public $description;
    public $title;
    public $image;
    public $galleryId;
    public $photos = [];

    use WithFileUploads;

    public function openNewGalleryModal()
    {
        $this->newGalleryModal = true;
    }

    public function openAddMoreImageModal($id)
    {
        $this->galleryId = $id;
        $this->addMoreImageModal = true;
    }

    public function saveGallery()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|max:2048',
        ]);
        $image = Storage::disk('goro')->put('gallery', $this->image);
        $gallery = Gallery::create([
            'title' => $this->title,
            'description' => $this->description,
            'image' => url('storage/' . $image),
            'poster_id' => auth()->user()->id,
            'status' => 'active',
            'station_id' => auth()->user()->station_id,
        ]);

        $this->galleryId = $gallery->id;
        $this->newGalleryModal = false;
        $this->reset(['title', 'description', 'image']);

        $this->addMoreImageModal = true;
        // session()->flash('status', 'Post successfully created.');
    }

    public function saveMoreImage()
    {
        $this->validate([
            'photos.*' => 'image|max:1024'
        ]);


        foreach ($this->photos as $photo) {
            $image = Storage::disk('goro')->put('gallery', $photo);
            Img::create([
                'galleries_id' => $this->galleryId,
                'image' => url('images/' . $image),
            ]);
        }


        $this->addMoreImageModal = false;
        $this->reset(['image']);
    }

    public function render()
    {
        $galleries = Gallery::where('station_id', auth()->user()->station_id)->latest()->paginate(10);
        return view('livewire.gallery.galleries', compact('galleries'));
    }
}
