<?php

namespace App\Livewire\Wsf;

use App\Models\District;
use App\Models\Homecell;
use App\Models\HomecellReport;
use App\Models\Province;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin')]
class HrStatistics extends Component
{

    public $month;
    public $date;
    public $year;
    public $type;
    public $week = 'date';
    public $province;


    public function mount()
    {
        if (date("w") == 6) {
            $this->week = date('Y-m-d',  strtotime("today"));
        } else {
            $this->week = date('Y-m-d',  strtotime("last saturday"));
        }
    }

    public function report()
    {

        $total = [];
        $nc = [];
        $ft = [];
        $male = [];
        $female = [];
        $children = [];
        $districts = District::all();
        $province = Province::all();
        $homecells = Homecell::all();
        $reports = HomecellReport::whereRaw('MONTH(week) = MONTH(?)', [$this->month])->get();
        foreach ($reports as $report) {
            $total[] =  $report->total;
            $nc[] =  $report->new_convert;
            $ft[] =  $report->first_timer;
            $male[] =  $report->male;
            $female[] =  $report->female;
            $children[] =  $report->children;
        }
    }


    public function weekly()
    {
        if (date("w") == 6) {
            $week = date('Y-m-d',  strtotime("today"));
            // $request['week'] = date('W');
        } else {
            $week = date('Y-m-d',  strtotime("last saturday"));
            // $request['week'] = date('W') - 1;
        }
        $total = [];
        $nc = [];
        $ft = [];
        $male = [];
        $female = [];
        $children = [];
        $currentMonth = date('m');
        $districts = District::all();
        $province = Province::all();
        $homecells = Homecell::all();
        $reports = HomecellReport::whereWeek($week)->get();
        $homecellReport = HomecellReport::where('station_id', auth()->user()->station_id)
            ->search($this->search)
            ->where("week", $this->hrForm->week)
            ->orderBy($this->sortBy, $this->sortDir)
            ->paginate($this->numPerPage);
        $newHomecell = Homecell::whereRaw('MONTH(created_at) = ?', [$currentMonth])->get();
        foreach ($reports as $report) {
            $total[] =  $report->total;
            $nc[] =  $report->new_convert;
            $ft[] =  $report->first_timer;
            $male[] =  $report->male;
            $female[] =  $report->female;
            $children[] =  $report->children;
        }
    }
    public function render()
    {


        $total = [];
        $nc = [];
        $ft = [];
        $male = [];
        $female = [];
        $children = [];
        $districts = District::where('station_id', auth()->user()->station_id)
            // ->where("week", $this->week)
            ->get();
        $province = Province::where('station_id', auth()->user()->station_id)
            // ->where("week", $this->week)
            ->get();
        $homecells = Homecell::where('station_id', auth()->user()->station_id)
            // ->where("week", $this->week)
            ->get();
        $reports = HomecellReport::where('station_id', auth()->user()->station_id)
            ->where("week", $this->week)
            ->get();
        foreach ($reports as $report) {
            $total[] =  $report->total;
            $nc[] =  $report->new_convert;
            $ft[] =  $report->first_timer;
            $male[] =  $report->male;
            $female[] =  $report->female;
            $children[] =  $report->children;
        }
        return view('livewire.wsf.hr-statistics', [
            'total' => array_sum($total),
            'nc' => array_sum($nc),
            'ft' => array_sum($ft),
            'female' => array_sum($female),
            'male' => array_sum($male),
            'children' => array_sum($children),
            'homecells' => $homecells,
            'provinces' => $province,
            'districts' => $districts,
            'reports' => $reports,
        ]);
    }
}
