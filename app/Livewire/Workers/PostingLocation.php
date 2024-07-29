<?php

namespace App\Livewire\Workers;

use App\Livewire\Image\Post;
use App\Models\PostingLocation as ModelsPostingLocation;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Form;
use Livewire\WithPagination;

#[Layout('layouts.admin')]
class PostingLocation extends Component
{
    use WithPagination;
    public $newPositionDialog = false;
    public PostingLocationForm $poForm;
    public $editMode = false;
    public ModelsPostingLocation $pl;


    public function openNewPosition()
    {
        $this->newPositionDialog = true;
    }

    public function edit(ModelsPostingLocation $pl)
    {
        $this->poForm->setData($pl);
        $this->editMode = true;
        $this->newPositionDialog = true;
    }

    public function delete(ModelsPostingLocation $pl)
    {
        $pl->delete();
        $this->resetPage();
    }

    public function save()
    {
        if ($this->editMode) {
            $this->poForm->update();
            $this->resetPage();
        } else {
            $this->poForm->store();
            $this->resetPage();
        }


        $this->poForm->reset(['wing', 'tag', 'location']);
        $this->newPositionDialog = false;
        $this->resetPage();
    }

    public function render()
    {
        $location = ModelsPostingLocation::where('station_id', Auth::user()->station_id)
            ->get();
        return view('livewire.workers.posting-location', [
            'locations' => $location,
        ]);
    }
}

class PostingLocationForm extends Form
{

    public $wing;

    public $tag;
    public $location;
    public $station_id;
    public $posting_location_id;
    public ModelsPostingLocation $pl;

    public function setData(ModelsPostingLocation $pl)
    {
        $this->pl = $pl;
        $this->wing = $pl->wing;
        $this->tag = $pl->tag;
        $this->location = $pl->location;
        $this->station_id = $pl->station_id;
        $this->posting_location_id = $pl->id;
    }

    public function update()
    {
        $this->validate([
            'wing' => 'required',
            'tag' => 'required',
            'location' => 'required',
        ]);
        $this->pl->update([
            'wing' => $this->wing,
            'tag' => $this->tag,
            'location' => $this->location,
            'station_id' => $this->station_id,
        ]);
    }

    public function store()
    {
        $this->validate([
            'wing' => 'required',
            'tag' => 'required',
            'location' => 'required',
        ]);
        ModelsPostingLocation::create([
            'wing' => $this->wing,
            'tag' => $this->tag,
            'location' => $this->location,
            'station_id' => Auth::user()->station_id,
        ]);
    }
}
