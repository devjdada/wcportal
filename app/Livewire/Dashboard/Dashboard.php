<?php

namespace App\Livewire\Dashboard;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin')]
class Dashboard extends Component
{
    public function mount()
    {
    }
    public function render()
    {
        return view('livewire.dashboard.dashboard');
    }
}
