<?php

namespace App\Livewire\Forms;

use App\Models\Unit;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\WithFileUploads;

class UnitForm extends Form
{
    use WithFileUploads;
    public Unit $unit;
    public $id = '';
    public $phone = '';
    #[Validate('required')]
    public $title = '';
    public $about = '';
    public $email = '';
    public $cover_image_path = '';
    public $station_id = '';

    public function setContact(Unit $unit)
    {
        $this->unit = $unit;
        $this->title = $unit->title;
        $this->about = $unit->about;
        $this->email = $unit->email;
        $this->cover_image_path = $unit->cover_image_path;
        $this->phone = $unit->phone;
        $this->station_id = $unit->station_id;
    }

    public function store()
    {

        // $this->cover_image_path->store(path: 'cover');
        $this->station_id = auth()->user()->station_id;
        $this->validate();
        Unit::create($this->all());
        $this->reset(['title', 'about', 'email', 'cover_image_path', 'phone']);
    }

    public function update()
    {
        $this->validate();
        $this->unit->update($this->all());
    }
}
