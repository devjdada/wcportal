<?php

namespace App\Livewire\Wsf;

use App\Models\Homecell;
use App\Models\HomecellReport;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin')]
class YetToSubmit extends Component
{
    public $date;
    public $submitted;
    public $female;
    public $homecells;
    public $yet = [];
    public $yetHomecell;
    public $already = [];
    public $week;

    public function mount()
    {
        $this->yetToSubmtte();
    }
    public function yetToSubmtte()
    {
        if (date("w") == 6) {
            $this->week = date('Y-m-d',  strtotime("today"));
            // $request['week'] = date('W');
        } else {
            $this->week = date('Y-m-d',  strtotime("last saturday"));
            // $request['week'] = date('W') - 1;
        }
        $homecells = Homecell::all();
        $this->homecells = $homecells;
        $reports = HomecellReport::whereWeek($this->week)->get();
        $h = [];
        $r = [];
        foreach ($homecells as $homecell) {
            $h[] = $homecell->id;
        }
        foreach ($reports as $report) {
            $r[] = $report->homecell_id;
        }
        $result = array_diff($h, $r);

        $yet = [];
        foreach ($result as $key => $value) {
            $yet[] = $value;
        }
        $this->yet = $yet;
        $this->already = $r;

        $hhc = count($homecells);
        $rc = count($reports);
        $x  = $rc / $hhc;
        $this->submitted = $x * 100;

        $this->yetHomecell =    Homecell::whereIn("id",  $yet)->get();
    }
    public function render()
    {
        return view('livewire.wsf.yet-to-submit');
    }
}
