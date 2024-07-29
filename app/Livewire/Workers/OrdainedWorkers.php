<?php

namespace App\Livewire\Workers;

use App\Models\OrdainedWorker;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin')]
class OrdainedWorkers extends Component
{
    public function render()
    {
        $workers = OrdainedWorker::where('station_id', auth()->user()->station_id)->get();
        return view('livewire.workers.ordained-workers', compact('workers'));
    }
}
