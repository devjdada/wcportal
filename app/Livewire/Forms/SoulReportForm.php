<?php

namespace App\Livewire\Forms;

use App\Models\SoulReport;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SoulReportForm extends Form
{
    public $soul_id;
    public $user_id;
    public $station_id;
    #[Validate('required')]
    public $report;
    public $prayer;
    public $homecell;
    public $baptised;
    public $unit;
    public $last_service;
    public $foundation_class;
    public $exblish;
    public $born_again;

    public function store()
    {
        $this->validate();
        SoulReport::create($this->all());
    }

    public function update()
    {
    }
}
