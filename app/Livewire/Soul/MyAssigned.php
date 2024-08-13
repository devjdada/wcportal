<?php

namespace App\Livewire\Soul;

use App\Models\Assigned as ModelsAssigned;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin')]
class MyAssigned extends Component
{
    public function render()
    {
        $assigneds = ModelsAssigned::where('assigned_to', auth()->user()->id)
            // ->groupBy('contact_id')
            ->get();
        // dd($assigeds);
        return view('livewire.soul.my-assigned', [
            'assigneds' => $assigneds
        ]);
    }
}
