<?php

namespace App\Livewire\Forms;

use App\Models\NewConvert;
use Livewire\Attributes\Validate;
use Livewire\Form;

class NewConvertForm extends Form
{
    public $nc;
    public SmsForm $sms;
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



    public function setContact(NewConvert $nc)
    {
        $this->nc  = $nc;
        $this->surname = $nc->surname;
        $this->firstname = $nc->firstname;
        $this->firstname = $nc->firstname;
        $this->phone = $nc->phone;
        $this->prayer_point = $nc->prayer_point;
        $this->location = $nc->location;
        $this->station_id = $nc->station_id;
        $this->invitted_by = $nc->invitted_by;
        $this->post_by = $nc->post_by;
        $this->marital = $nc->marital;
        $this->ocupation = $nc->ocupation;
        $this->address = $nc->address;
        $this->email = $nc->email;
        $this->bus_stop = $nc->bus_stop;
        $this->born_again = $nc->born_again;
        $this->born_again_on = $nc->born_again_on;
    }

    public function store()
    {
        $this->station_id = auth()->user()->station_id;
        $this->post_by = auth()->user()->id;
        $this->validate();
        NewConvert::create($this->all());
    }

    public function update()
    {
        $this->validate();
        $this->nc->update($this->all());
    }
}
