<?php

namespace App\Livewire\Forms;

use App\Models\Homecell;
use Livewire\Attributes\Validate;
use Livewire\Form;

class HomecellForm extends Form
{
    public ?Homecell  $homecell;
    public $phone = '';
    #[Validate('required')]
    public $title = '';
    public $about = '';
    public $address = '';
    public $station_id = '';
    public $district_id = '';
    public $province_id = '';

    public function setContact(Homecell $homecell)
    {
        $this->homecell  = $homecell;
        $this->title = $homecell->title;
        $this->about = $homecell->about;
        $this->address = $homecell->address;
        $this->phone = $homecell->phone;
        $this->station_id = $homecell->station_id;
        $this->district_id = $homecell->district_id;
        $this->province_id = $homecell->province_id;
    }

    public function store()
    {
        $this->station_id = auth()->user()->station_id;
        $this->validate();
        Homecell::create($this->all());
    }

    public function update()
    {
        $this->validate();
        $this->homecell->update($this->all());
    }
}
