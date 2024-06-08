<?php

namespace App\Livewire\Forms;

use App\Models\FirstTimer;
use Livewire\Attributes\Validate;
use Livewire\Form;

class FirstTimerForm extends Form
{

    public $ft;
    public $surname = '';
    #[Validate('required')]
    public $firstname = '';
    public $bus_stop = '';
    #[Validate('required')]
    public $phone = '';
    public $location = '';
    public $station_id = '';
    public $invitted_by = '';
    public $post_by = '';
    public $marital = '';
    public $ocupation = '';
    public $address = '';
    public $email = '';
    public $born_again = '';
    public $prayer_point = '';
    public $born_again_on = '';



    public function setContact(FirstTimer $ft)
    {
        $this->ft  = $ft;
        $this->surname = $ft->surname;
        $this->firstname = $ft->firstname;
        $this->firstname = $ft->firstname;
        $this->phone = $ft->phone;
        $this->prayer_point = $ft->prayer_point;
        $this->location = $ft->location;
        $this->station_id = $ft->station_id;
        $this->invitted_by = $ft->invitted_by;
        $this->post_by = $ft->post_by;
        $this->marital = $ft->marital;
        $this->ocupation = $ft->ocupation;
        $this->address = $ft->address;
        $this->email = $ft->email;
        $this->bus_stop = $ft->bus_stop;
        $this->born_again = $ft->born_again;
        $this->born_again_on = $ft->born_again_on;
    }

    public function store()
    {
        $this->station_id = auth()->user()->station_id;
        $this->post_by = auth()->user()->id;
        $this->validate();
        FirstTimer::create($this->all());
    }

    public function update()
    {
        $this->validate();
        $this->ft->update($this->all());
    }
}
