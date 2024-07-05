<?php

namespace App\Livewire\Dashboard;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin')]
class Dashboard extends Component
{
    public function mount()
    {


        $targetFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage/app/public';
        $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/public/storage';
        symlink($targetFolder, $linkFolder);

        dd('Symlink process successfully completed');
    }
    public function render()
    {
        return view('livewire.dashboard.dashboard');
    }
}
