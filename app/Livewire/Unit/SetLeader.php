<?php

namespace App\Livewire\Unit;

use App\Models\UnitLeader;
use App\Models\User;
use Livewire\Component;

class SetLeader extends Component
{
    public $setLeader = false;
    public $editMode = false;
    public $leaderDialog = false;
    public UnitLeader $ul;

    public function openNewLeaderDialog(UnitLeader $ul)
    {
        $this->leaderDialog = true;
        $this->ul = $ul;
    }
    public function save()
    {
        if ($this->editMode) {
            $this->ul->update();
            $this->resetPage();
            $this->setLeader = false;
            $this->editMode = false;
        } else {
            $this->ul->store();
            $this->resetPage();
            $this->setLeader = false;
        }
    }
    public function delete(UnitLeader $ul)
    {
        $ul->delete();
        $this->resetPage();
    }
    public function edit(UnitLeader $ul)
    {
        $this->ul = $ul;
        $this->editMode = true;
        $this->leaderDialog = true;
    }
    public function render()
    {
        $users = User::where('station_id', auth()->user()->station_id)->get();
        return view('livewire.unit.set-leader', [
            'users' => $users,
            'positions' => [
                [
                    'title' => 'Leader',
                    'id' => '1',
                ],
                [
                    'title' => 'Secratary',
                    'id' => '2',
                ],
                [
                    'title' => 'Deputy Leader',
                    'id' => '3',
                ]
            ]
        ]);
    }
}
