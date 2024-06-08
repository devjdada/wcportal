<?php

namespace App\Livewire\Forms;

use App\Models\District;
use Livewire\Attributes\Validate;
use Livewire\Form;

class DistrictForm extends Form
{
    public ?District  $district;
    public $phone = '';
    #[Validate('required')]
    public $title = '';
    public $about = '';
    public $address = '';
    public $district_id = '';
    public $station_id = '';
    public $province_id = '';

    public function setContact(District $district)
    {
        $this->district  = $district;
        $this->title = $district->title;
        $this->about = $district->about;
        $this->address = $district->address;
        $this->phone = $district->phone;
        $this->province_id = $district->province_id;
        $this->station_id = $district->station_id;
    }



    public function store()
    {
        $this->station_id = auth()->user()->station_id;
        $this->validate();
        District::create($this->all());
    }

    public function update()
    {
        $this->validate();
        $this->district->update($this->all());
    }
}
