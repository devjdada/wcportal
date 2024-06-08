<?php

namespace App\Livewire\Unit;

use App\Livewire\Forms\UnitForm;
use App\Livewire\Forms\UnitLeaderForm;
use App\Models\Unit;
use App\Models\UnitLeader;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

#[Layout('layouts.admin')]
class ManageUnit extends Component
{
    use WithPagination;
    use WithFileUploads;
    public UnitForm $unitForm;
    public UnitLeaderForm $ulForm;
    public $createUnit = false;
    public $editMode = false;
    public Unit $unit;

    public $setLeader = false;
    public $leaderDialog = false;


    public function openNewLeaderDialog(Unit $unit)
    {
        $this->leaderDialog = true;
        $this->unit = $unit;
        $this->ulForm->unit_id = $unit->id;
    }
    public function saveLeader()
    {
        if ($this->editMode) {
            $this->ulForm->update();
            $this->resetPage();
            $this->setLeader = false;
            $this->editMode = false;
        } else {
            $this->ulForm->store();
            $this->resetPage();
            $this->setLeader = false;
        }
    }
    public function create()
    {
        $this->createUnit = true;
    }
    public function save()
    {
        if ($this->editMode) {
            $this->unitForm->update();
            $this->resetPage();
            $this->createUnit = false;
            $this->editMode = false;
        } else {
            $this->unitForm->store();
            $this->resetPage();
            $this->createUnit = false;
        }
    }

    public function delete(Unit $unit)
    {
        if ($unit->cover_image_path) {
            $file_path = public_path($unit->cover_image_path);
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }
        $unit->delete();
        $this->resetPage();
    }
    public function edit(Unit $unit)
    {
        $this->unitForm->setContact($unit);
        $this->createUnit = true;
        $this->editMode = true;
    }
    public function render()
    {
        $unitLeaders = UnitLeader::select('user_id')
            ->where('station_id', Auth()->user()->station_id)
            ->where('status', true)
            ->get();
        $unitLeaders = User::whereIn('id', $unitLeaders)->get();
        $users = User::select('id', 'name', 'phone')->where('station_id', Auth()->user()->station_id)->get();
        $units = Unit::where('station_id', Auth()->user()->station_id)->get();
        return view('livewire.unit.manage-unit', [
            'units' => $units,
            'users' => $users,
            'positions' => ['Leader', 'Ass Leader', 'Secratory'],
            'unitLeaders' => $unitLeaders,
        ]);
    }
}
