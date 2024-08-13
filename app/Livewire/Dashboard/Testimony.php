<?php

namespace App\Livewire\Dashboard;

use App\Models\Testimony as ModelsTestimony;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Testimony extends Component
{
    public function render()
    {
        $testimonies = ModelsTestimony::where('station_id', Auth::user()->station_id)->get();
        return view('livewire.dashboard.testimony', [
            'testimonies' => $testimonies
        ]);
    }
}
