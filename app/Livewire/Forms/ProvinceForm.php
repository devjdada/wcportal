<?php

namespace App\Livewire\Forms;

use App\Models\Province;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProvinceForm extends Form
{
    public ?Province  $province;
    public $phone = '';
    #[Validate('required')]
    public $title = '';
    public $about = '';
    public $address = '';
    public $station_id = '';

    public function setContact(Province $province)
    {
        $this->province  = $province;
        $this->title = $province->title;
        $this->about = $province->about;
        $this->address = $province->address;
        $this->phone = $province->phone;
        $this->station_id = $province->station_id;
    }

    public function store()
    {
        $this->station_id = auth()->user()->station_id;
        $this->validate();
        Province::create($this->all());
    }

    public function update()
    {
        $this->validate();
        $this->province->update($this->all());
    }
}
