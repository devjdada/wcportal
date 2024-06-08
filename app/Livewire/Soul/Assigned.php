<?php

namespace App\Livewire\Soul;

use App\Models\Assigned as ModelsAssigned;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin')]
class Assigned extends Component
{
    public function render()
    {
        $assigneds = ModelsAssigned::where('station_id', auth()->user()->station_id)
            // ->groupBy('contact_id')
            ->get();
        // dd($assigeds);
        return view('livewire.soul.assigned', [
            'assigneds' => $assigneds
        ]);
    }
}
