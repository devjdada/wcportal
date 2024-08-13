<?php

namespace App\Livewire\Stats;

use App\Models\HomecellReport;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class WsfWeeklyReportChart extends Component
{
    public $week;
    public $reports;
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

        $this->reports = DB::table('homecell_reports')
            ->join('provinces', 'homecell_reports.province_id', '=', 'provinces.id')
            ->selectRaw('title AS province, SUM(total) AS total')
            ->where('homecell_reports.station_id', auth()->user()->station_id)
            ->where('homecell_reports.week', $this->week)
            ->groupBy('province')
            ->orderBy('province')
            ->get();


        return view('livewire.stats.wsf-weekly-report-chart', [
            'reports' => $this->reports
        ]);
    }
}
