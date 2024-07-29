<?php

namespace App\Livewire\Forms;

use App\Models\Province;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UserForm extends Form
{
    public ?User  $user;
    public $marital = '';
    #[Validate('required')]
    public $status = '';
    public $gender = '';
    public $address = '';
    public $dob = '';
    public $callerSquad = '';




    public function update()
    {
        $this->validate();
        $this->user->update($this->all());
    }
}
