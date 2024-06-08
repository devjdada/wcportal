<?php

namespace App\Livewire\Forms;

use App\Models\HomecellReport;
use Livewire\Attributes\Validate;
use Livewire\Form;

class HomecellReportForm extends Form
{
    public HomecellReport $homecellReport;
    #[Validate('required')]
    public $male = '';
    #[Validate('required')]
    public $female = '';
    #[Validate('required')]
    public $children = '';
    #[Validate('required')]
    public $first_timer = '';
    #[Validate('required')]
    public $new_convert = '';
    public $total = 0;
    public $week;
    public $station_id = '';
    public $homecell_id = '';
    public $user_id = '';

    public function setContact(HomecellReport $hr)
    {
        $this->homecellReport  = $hr;
        $this->male = $hr->male;
        $this->week = $hr->week;
        $this->female = $hr->female;
        $this->children = $hr->children;
        $this->first_timer = $hr->first_timer;
        $this->new_convert = $hr->new_convert;
        $this->homecell_id = $hr->homecell_id;
        $this->station_id = $hr->station_id;
    }

    public function store()
    {

        $this->station_id = auth()->user()->station_id;
        $this->user_id = auth()->user()->id;
        $this->validate();
        $this->total =
            $this->male + $this->female + $this->children + $this->first_timer + $this->new_convert;

        HomecellReport::create($this->all());
    }

    public function update()
    {
        $this->user_id = auth()->user()->id;
        $this->validate();
        $this->total =
            $this->male + $this->female + $this->children + $this->first_timer + $this->new_convert;

        $this->homecellReport->update($this->all());
    }
}
