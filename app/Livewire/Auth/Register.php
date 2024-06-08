<?php

namespace App\Livewire\Auth;

use App\Models\Station;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guard')]
class Register extends Component
{
    public function render()
    {
        return view('livewire.auth.register', ["stations" => Station::orderBy('location', 'ASC')->get()]);;
    }
}
