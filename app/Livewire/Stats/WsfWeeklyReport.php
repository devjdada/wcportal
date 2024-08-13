<?php

namespace App\Livewire\Stats;

use App\Models\Homecell;
use App\Models\HomecellReport;
use Livewire\Component;

class WsfWeeklyReport extends Component
{
    public $week;
    public function mount()
    {
        if (date("w") == 6) {
            $this->week = date('Y-m-d',  strtotime("today"));
        } else {
            $this->week = date('Y-m-d',  strtotime("last saturday"));
        }
    }
    public function render()
    {


        $reports = HomecellReport::where('station_id', auth()->user()->station_id)
            ->where("week", $this->week)
            ->get();

        $homecells = Homecell::where('station_id', auth()->user()->station_id)
            ->get();

        $h = [];
        $r = [];
        foreach ($homecells as $homecell) {
            $h[] = $homecell->id;
        }
        foreach ($reports as $report) {
            $r[] = $report->homecell_id;
        }
        $result = array_diff($h, $r);

        $total = [];
        $nc =  [];
        $ft =  [];
        $male =  [];
        $female =  [];
        $children =  [];
        foreach ($reports as $report) {
            $total[] =  $report->total;
            $nc[] =  $report->new_convert;
            $ft[] =  $report->first_timer;
            $male[] =  $report->male;
            $female[] =  $report->female;
            $children[] =  $report->children;
        }

        $currentWeek = date('W');
        $currentWeek--;
        $newHomecell = Homecell::select('id')
            ->whereRaw('WEEK(created_at) = ?', [$currentWeek])->get();


        return view('livewire.stats.wsf-weekly-report', [
            'total' => array_sum($total),
            'nc' => array_sum($nc),
            'nh' => count($newHomecell),
            'ft' => array_sum($ft),
            'female' => array_sum($female),
            'male' => array_sum($male),
            'children' => array_sum($children),
            'reports' => $reports,
            'yetTo' => count($result),
        ]);
    }
}
