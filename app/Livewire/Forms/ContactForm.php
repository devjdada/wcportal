<?php

namespace App\Livewire\Forms;

use App\Models\Soul;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ContactForm extends Form
{
    public ?Soul $soul;
    public $surname = '';
    #[Validate('required')]
    public $firstname = '';
    public $prayer_point = '';
    #[Validate('required')]
    public $phone = '';
    public $location = '';
    public $station_id = '';

    public function setContact(Soul $soul)
    {
        $this->soul  = $soul;
        $this->surname = $soul->surname;
        $this->firstname = $soul->firstname;
        $this->firstname = $soul->firstname;
        $this->phone = $soul->phone;
        $this->prayer_point = $soul->prayer_point;
        $this->location = $soul->location;
    }

    public function store()
    {
        $this->station_id = auth()->user()->station_id;
        $this->validate();
        auth()->user()->souls()->create($this->all());
    }

    public function update()
    {
        $this->validate();
        $this->soul->update($this->all());
    }
}
