<?php

namespace App\Livewire\Soul;

use App\Models\Assigned;
use App\Models\Soul;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin')]
class Assigning extends Component
{

    public $select_contact = [];
    public $select_user = [];
    public $busy = false;
    public $limitContactAssigned = 5;
    public $limitUserAssigned = 5;

    public function selectContact($id)
    {
        if (in_array($id, $this->select_contact)) {
            $this->select_contact = array_diff($this->select_contact, [$id]);
        } else {
            $this->select_contact[] = $id;
        }
    }
    public function selectUser($id)
    {
        if (in_array($id, $this->select_user)) {
            $this->select_user = array_diff($this->select_user, [$id]);
        } else {
            $this->select_user[] = $id;
        }
    }
    public function assign()
    {
        $this->busy = true;
        if (count($this->select_contact) == 0) {
            return;
        }
        if (count($this->select_user) == 0) {
            return;
        }
        $users = User::whereIn("id",  $this->select_user)->get();
        $souls = Soul::whereIn("id",  $this->select_contact)->get();
        foreach ($users as $user) {
            foreach ($souls as $soul) {

                $assign = new Assigned();
                $assign->contact_id = $soul->id;
                $assign->assigned_to = $user->id;
                $assign->station_id = auth()->user()->station_id;
                $assign->type = 'soul';
                if (Assigned::where('contact_id', $soul->id)->where('assigned_to', $user->id)->exists()) {
                } else {
                    if ($soul->soul_winner != $user->id) {
                        $assign->save();
                    }
                }
            }
        }
        $this->select_contact = [];
        $this->select_user = [];
        $this->busy = false;
    }

    public function render()
    {
        $users = User::where('station_id', auth()->user()->station_id)->get();
        $soul = Soul::where('station_id', auth()->user()->station_id)->get();
        return view('livewire.soul.assigning', [
            'users' => $users,
            'souls' => $soul,
        ]);
    }
}
