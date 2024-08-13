<?php

namespace App\Livewire\Stats;

use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin')]
class SoulsMonthlyDoughnutChart extends Component
{
    public $monthStats = [];
    public $dayStats = [];
    public $chartType = 'line';
    public $chartList = ['bar', 'line', 'pie', 'area', 'donut'];
    public function render()
    {

        $month = date('Y-m-d');

        $this->monthStats = DB::table('souls')
            ->selectRaw("Month(created_at) AS month, COUNT(*) AS souls")
            // ->whereMonth('created_at', '=', date('m', strtotime($month)))
            ->whereYear('created_at', '=', date('Y', strtotime($month)))
            ->groupBy('month')
            ->orderBy('month')
            ->get();




        return view('livewire.stats.souls-monthly-doughnut-chart', [
            'monthStats' => $this->monthStats,
        ]);
    }
}
