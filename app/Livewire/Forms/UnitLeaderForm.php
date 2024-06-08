<?php

namespace App\Livewire\Forms;

use App\Models\UnitLeader;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UnitLeaderForm extends Form
{
    public UnitLeader $ul;
    public $id = '';
    #[Validate('required')]
    public $position = '';
    public $about = '';
    public $station_id = '';
    public $end = '';
    public $start = '';
    #[Validate('required')]
    public $unit_id = '';
    #[Validate('required')]
    public $user_id = '';


    public function setContact(UnitLeader $ul)
    {
        $this->ul = $ul;
        $this->ul->end = $ul->end;
        $this->ul->start = $ul->start;
        $this->ul->position = $ul->position;
        $this->ul->about = $ul->about;
        $this->ul->unit_id = $ul->unit_id;
        $this->ul->station_id = $ul->station_id;
    }

    public function store()
    {

        // $this->cover_image_path->store(path: 'cover');
        $this->station_id = auth()->user()->station_id;
        $this->validate();
        UnitLeader::create($this->all());
        $this->reset(['user_id', 'about',  'position', 'end', 'start']);
    }

    public function update()
    {
        $this->validate();
        $this->ul->update($this->all());
    }
}
