<?php

namespace App\Livewire\Sms;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin')]
class SmsIndex extends Component
{
    public function render()
    {
        return view('livewire.sms.sms-index');
    }
}
