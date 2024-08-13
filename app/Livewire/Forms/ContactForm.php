<?php

namespace App\Livewire\Forms;

use App\Models\Assigned;
use App\Models\Soul;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ContactForm extends Form
{
    public ?Soul $soul;
    public $surname = '';
    #[Validate('required')]
    public $firstname = '';
    public $prayer_point = '';
    #[Validate('required')]
    public $phone = '';
    public $location = '';
    public $station_id = '';

    public function setContact(Soul $soul)
    {
        $this->soul  = $soul;
        $this->surname = $soul->surname;
        $this->firstname = $soul->firstname;
        $this->firstname = $soul->firstname;
        $this->phone = $soul->phone;
        $this->prayer_point = $soul->prayer_point;
        $this->location = $soul->location;
    }

    public function store()
    {
        $this->station_id = auth()->user()->station_id;
        $this->validate();
        $soul = auth()->user()->souls()->create($this->all());

        $cs = User::where('caller_squad', true)
            ->where('id', '!=', Auth::user()->id)
            ->inRandomOrder()
            ->limit(4)
            ->get();
        foreach ($cs as $caller) {
            $assign = new Assigned();
            $assign->contact_id = $soul->id;
            $assign->assigned_to = $caller->id;
            $assign->station_id = auth()->user()->station_id;
            $assign->type = 'soul';
            if (!Assigned::where('contact_id', $soul->id)->where('assigned_to', $caller->id)->exists()) {
                if ($soul->soul_winner != $caller->id) {
                    $assign->save();
                }
            }
        }
    }

    public function update()
    {
        $this->validate();
        $this->soul->update($this->all());
    }
}
