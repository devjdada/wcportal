<?php

namespace App\Livewire\Soul;

use App\Livewire\Forms\FirstTimerForm;
use App\Models\FirstTimer;
use App\Models\Soul;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.admin')]
class FirstTimert extends Component
{
    use WithPagination;
    public FirstTimerForm $ftForm;
    public $editMode = false;
    public $newFTDialog = false;
    public $delFTDialog = false;
    public $lookFTDialog = false;
    public FirstTimer $delFt;
    public $ft;
    public $soul;
    public $look = false;
    public $found = false;

    // #[Url()]
    public $search = '';
    //#[Url()]
    public $sortBy = 'created_at';
    // #[Url()]
    public $sortDir = 'DESC';
    // #[Url()]
    public $numPerPage = 20;

    public function mount()
    {
    }

    public function closeNewFTDialog()
    {
        $this->newFTDialog = false;
        $this->ftForm->surname = "";
        $this->ftForm->firstname = "";
        $this->ftForm->phone = "";
        $this->ftForm->prayer_point = "";
        $this->ftForm->location = "";
        $this->ftForm->station_id = "";
        $this->ftForm->invitted_by = "";
        $this->ftForm->post_by = "";
        $this->ftForm->marital = "";
        $this->ftForm->ocupation = "";
        $this->ftForm->address = "";
        $this->ftForm->email = "";
        $this->ftForm->bus_stop = "";
        $this->ftForm->born_again = "";
        $this->ftForm->born_again_on = "";
    }
    public function openNewFTDialog()
    {
        $this->lookFTDialog = true;
    }
    public function openDelDialog(FirstTimer $ft)
    {
        $this->delFt = $ft;
        $this->delFTDialog = true;
    }

    public function lookup()
    {
        $this->soul = Soul::where('phone', $this->ftForm->phone)->first();
        if (empty($this->soul)) {
            $this->found = false;
            $this->ftForm->invitted_by = null;
        } else {
            $this->found = true;
            $this->ftForm->surname = $this->soul->surname;
            $this->ftForm->firstname = $this->soul->firstname;
            $this->ftForm->address = $this->soul->address;
            $this->ftForm->invitted_by = $this->soul->soul_winner;
        }
        $this->lookFTDialog = false;
        $this->newFTDialog = true;
    }

    public function save()
    {
        if ($this->editMode) {
            $this->ftForm->update();
            $this->ftForm->surname = "";
            $this->ftForm->firstname = "";
            $this->ftForm->phone = "";
            $this->ftForm->prayer_point = "";
            $this->ftForm->location = "";
            $this->ftForm->station_id = "";
            $this->ftForm->invitted_by = "";
            $this->ftForm->post_by = "";
            $this->ftForm->marital = "";
            $this->ftForm->ocupation = "";
            $this->ftForm->address = "";
            $this->ftForm->email = "";
            $this->ftForm->bus_stop = "";
            $this->ftForm->born_again = "";
            $this->ftForm->born_again_on = "";

            $this->resetPage();
            $this->editMode = false;
            $this->newFTDialog = false;
        } else {
            // $this->validate();
            $this->ftForm->store();
            $this->ftForm->surname = "";
            $this->ftForm->firstname = "";
            $this->ftForm->phone = "";
            $this->ftForm->prayer_point = "";
            $this->ftForm->location = "";
            $this->ftForm->station_id = "";
            $this->ftForm->invitted_by = "";
            $this->ftForm->post_by = "";
            $this->ftForm->marital = "";
            $this->ftForm->ocupation = "";
            $this->ftForm->address = "";
            $this->ftForm->email = "";
            $this->ftForm->bus_stop = "";
            $this->ftForm->born_again = "";
            $this->ftForm->born_again_on = "";
            $this->newFTDialog = false;

            session()->flash('status', 'Post successfully updated.');
            $this->resetPage();
            $this->lookFTDialog = true;
        }
        //return $this->redirect('/my_contact');
    }

    public function delete()
    {
        $this->delReport->delete();
        $this->resetPage();
        $this->delFTDialog = false;
    }
    public function update()
    {
        $this->ftForm->update();
        $this->resetPage();
    }
    public function edit(FirstTimer $ft)
    {
        $this->ftForm->setContact($ft);
        $this->editMode = true;
        $this->newFTDialog = true;
    }

    public function setSort($sortField)
    {
        if ($this->sortBy === $sortField) {
            $this->sortDir = ($this->sortDir == 'ASC') ? 'DESC' : 'ASC';
        }
        $this->sortBy = $sortField;
    }
    public function render()
    {
        $ft = FirstTimer::where('station_id', auth()->user()->station_id)
            ->search($this->search)
            // ->where("week", $this->ftForm->week)
            ->orderBy($this->sortBy, $this->sortDir)
            ->paginate($this->numPerPage);
        return view('livewire.soul.first-timert', [
            'firsttimers' => $ft
        ]);
    }
}
