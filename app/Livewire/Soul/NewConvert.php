<?php

namespace App\Livewire\Soul;

use App\Livewire\Forms\NewConvertForm;
use App\Livewire\Forms\SmsForm;
use App\Models\NewConvert as ModelsNewConvert;
use App\Models\Soul;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.admin')]
class NewConvert extends Component
{
    use WithPagination;
    public NewConvertForm $ncForm;
    public SmsForm $sms;
    public $editMode = false;
    public $newNCDialog = false;
    public $delNCDialog = false;
    public $lookNCDialog = false;
    public ModelsNewConvert $delFt;
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
        $this->newNCDialog = false;
        $this->ncForm->surname = "";
        $this->ncForm->firstname = "";
        $this->ncForm->phone = "";
        $this->ncForm->prayer_point = "";
        $this->ncForm->location = "";
        $this->ncForm->station_id = "";
        $this->ncForm->invitted_by = "";
        $this->ncForm->post_by = "";
        $this->ncForm->marital = "";
        $this->ncForm->ocupation = "";
        $this->ncForm->address = "";
        $this->ncForm->email = "";
        $this->ncForm->bus_stop = "";
        $this->ncForm->born_again = "";
        $this->ncForm->born_again_on = "";
    }
    public function openNewNCDialog()
    {
        $this->lookNCDialog = true;
    }
    public function openDelDialog(ModelsNewConvert $nc)
    {
        $this->delFt = $nc;
        $this->delNCDialog = true;
    }

    public function lookup()
    {
        $this->soul = Soul::where('phone', $this->ncForm->phone)->first();
        if (empty($this->soul)) {
            $this->found = false;
            $this->ncForm->invitted_by = null;
        } else {
            $this->found = true;
            $this->ncForm->surname = $this->soul->surname;
            $this->ncForm->firstname = $this->soul->firstname;
            $this->ncForm->address = $this->soul->address;
            $this->ncForm->invitted_by = $this->soul->soul_winner;
        }
        $this->lookNCDialog = false;
        $this->newNCDialog = true;
    }

    public function save()
    {
        if ($this->editMode) {
            $this->ncForm->update();
            $this->ncForm->surname = "";
            $this->ncForm->firstname = "";
            $this->ncForm->phone = "";
            $this->ncForm->prayer_point = "";
            $this->ncForm->location = "";
            $this->ncForm->station_id = "";
            $this->ncForm->invitted_by = "";
            $this->ncForm->post_by = "";
            $this->ncForm->marital = "";
            $this->ncForm->ocupation = "";
            $this->ncForm->address = "";
            $this->ncForm->email = "";
            $this->ncForm->bus_stop = "";
            $this->ncForm->born_again = "";
            $this->ncForm->born_again_on = "";

            $this->resetPage();
            $this->editMode = false;
            $this->newNCDialog = false;
        } else {
            // $this->validate();
            $this->ncForm->store();
            //$this->sms->sendTextMessage();
            $this->ncForm->surname = "";
            $this->ncForm->firstname = "";
            $this->ncForm->phone = "";
            $this->ncForm->prayer_point = "";
            $this->ncForm->location = "";
            $this->ncForm->station_id = "";
            $this->ncForm->invitted_by = "";
            $this->ncForm->post_by = "";
            $this->ncForm->marital = "";
            $this->ncForm->ocupation = "";
            $this->ncForm->address = "";
            $this->ncForm->email = "";
            $this->ncForm->bus_stop = "";
            $this->ncForm->born_again = "";
            $this->ncForm->born_again_on = "";
            $this->newNCDialog = false;

            session()->flash('status', 'Post successfully updated.');
            $this->resetPage();
            $this->lookNCDialog = true;
        }
        //return $this->redirect('/my_contact');
    }

    public function delete()
    {
        $this->delReport->delete();
        $this->resetPage();
        $this->delNCDialog = false;
    }
    public function update()
    {
        $this->ncForm->update();
        $this->resetPage();
    }
    public function edit(ModelsNewConvert $nc)
    {
        $this->ncForm->setContact($nc);
        $this->editMode = true;
        $this->newNCDialog = true;
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
        $nc = ModelsNewConvert::where('station_id', auth()->user()->station_id)
            ->search($this->search)
            // ->where("week", $this->ncForm->week)
            ->orderBy($this->sortBy, $this->sortDir)
            ->paginate($this->numPerPage);
        return view('livewire.soul.new-convert', [
            'new_converts' => $nc
        ]);
    }
}
