<?php

namespace App\Livewire\Stats;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin')]
class SoulsWeeklyBarChart extends Component
{
    public $startDate; // Define the start date of the range
    public $endDate;
    public $lastStartDate; // Define the start date of the range
    public $lastEndDate;
    public $monthStats = [];
    public $dayStats = [];
    public $lastMonthStats = [];
    public $chartType = 'line';
    public $chartList = ['bar', 'line', 'pie', 'area', 'donut'];
    public function render()
    {


        $this->startDate = date('Y-m-d', strtotime('-21 days')); // Define the start date of the range
        $this->endDate =  date('Y-m-d', strtotime('+1 days'));
        $this->dayStats = DB::table('souls')
            ->selectRaw("DATE(created_at) AS day, COUNT(*) AS souls")
            ->where('station_id', auth()->user()->station_id)
            ->whereBetween('created_at', [$this->startDate, $this->endDate])
            ->groupBy('day')
            ->orderBy('day')
            ->get();

        $lastMonthEnd = Carbon::now()->subMonth()->day(Carbon::now()->day)->addDay(1);
        $lastMonthStart = $lastMonthEnd->copy()->subDays(21);
        $this->lastEndDate = $lastMonthEnd->toDateString();
        $this->lastStartDate = $lastMonthStart->toDateString();

        $this->lastMonthStats = DB::table('souls')
            ->selectRaw("DATE(created_at) AS day, COUNT(*) AS souls")
            ->where('station_id', auth()->user()->station_id)
            ->whereBetween('created_at', [$this->lastStartDate, $this->lastEndDate])
            ->groupBy('day')
            ->orderBy('day')
            ->get();



        return view('livewire.stats.souls-weekly-bar-chart', [
            'dayStats' => $this->dayStats,

        ]);
    }
}
