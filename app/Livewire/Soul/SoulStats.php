<?php

namespace App\Livewire\Soul;

use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin')]
class SoulStats extends Component
{
    public $monthStats = [];
    public $dayStats = [];
    public $chartType = 'line';
    public $chartList = ['bar', 'line', 'pie', 'area', 'donut'];
    public function render()
    {

        $month = date('Y-m-d');
        $startDate = date('Y-m-d', strtotime('-14 days')); // Define the start date of the range
        $endDate =  date('Y-m-d', strtotime('+1 days'));
        $this->dayStats = DB::table('souls')
            ->selectRaw("DATE(created_at) AS day, COUNT(*) AS souls")
            ->whereBetween('created_at', [$startDate, $endDate])
            ->groupBy('day')
            ->orderBy('day')
            ->get();
        $this->monthStats = DB::table('souls')
            ->selectRaw("Month(created_at) AS month, COUNT(*) AS souls")
            // ->whereMonth('created_at', '=', date('m', strtotime($month)))
            ->whereYear('created_at', '=', date('Y', strtotime($month)))
            ->groupBy('month')
            ->orderBy('month')
            ->get();


        return view('livewire.soul.soul-stats', [
            'dayStats' => $this->dayStats,
            'monthStats' => $this->monthStats,

        ]);
    }
}
