<?php

namespace App\Livewire\Contacts;

use App\Livewire\Forms\ContactForm;
use App\Models\Soul;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Controllers\Traits\TextMessageTraits;
use App\Http\Controllers\Traits\ShareCodeTraits;
use App\Livewire\Forms\SoulReportForm;

#[Layout('layouts.admin')]
class AllContacts extends Component
{
    use WithPagination;
    use TextMessageTraits;
    use ShareCodeTraits;
    public Soul $soul;
    public ContactForm $contactForm;
    public SoulReportForm $srForm;
    public $contactId;
    public $editMode = false;
    public $reportMode = false;
    public $reportDialog = false;
    public $ncDialog = false;

    // #[Url()]
    public $search = '';
    //#[Url()]
    public $sortBy = 'created_at';
    // #[Url()]
    public $sortDir = 'DESC';
    // #[Url()]
    public $numPerPage = 10;

    public function openNewContactDialog()
    {
        $this->ncDialog = true;
    }
    public function openReportDialog()
    {
        $this->reportDialog = true;
    }

    public function save()
    {
        if ($this->editMode) {
            $this->contactForm->update();
            $this->contactForm->reset();
            $this->resetPage();
            $this->editMode = false;
        } else {
            // $this->validate();

            $this->contactForm->store();
            session()->flash('status', 'Post successfully updated.');
            $this->resetPage();
            // $this->sendTextContent($this->phoneCode($this->contactForm->phone));
            $this->contactForm->reset();
        }
        $this->ncDialog = false;
        //return $this->redirect('/my_contact');
    }

    public function setSort($sortField)
    {
        if ($this->sortBy === $sortField) {
            $this->sortDir = ($this->sortDir == 'ASC') ? 'DESC' : 'ASC';
        }
        $this->sortBy = $sortField;
    }
    public function delete(Soul $soul)
    {
        $soul->delete();
        $this->resetPage();
    }
    public function update()
    {
        $this->contactForm->update();
        $this->resetPage();
    }
    public function edit(Soul $soul)
    {
        // dd(auth()->user()->station_id);
        $this->editMode = true;
        $this->contactForm->setContact($soul);
    }
    public function report(Soul $soul)
    {
        $this->srForm->soul_id = $soul->id;
        $this->srForm->user_id = auth()->user()->id;
        $this->srForm->station_id = auth()->user()->station_id;
        $this->reportDialog = true;
    }
    public function saveReport()
    {
        $this->srForm->store();
        session()->flash('status', 'Post successfully updated.');
        $this->resetPage();
        $this->srForm->reset();
        $this->reportDialog = false;
    }
    public function render()
    {
        $myContacts = Soul::where('station_id', auth()->user()->station_id)
            ->search($this->search)
            ->orderBy($this->sortBy, $this->sortDir)
            ->paginate($this->numPerPage);

        return view('livewire.contacts.all-contacts', [
            'myContacts' => $myContacts
        ]);
    }
}
