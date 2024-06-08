<?php

namespace App\Livewire\Wsf;

use App\Livewire\Forms\HomecellReportForm;
use App\Models\HomecellReport as ModelsHomecellReport;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.admin')]
class HomecellReport extends Component
{
    use WithPagination;
    public HomecellReportForm $hrForm;
    public $editMode = false;
    public $newReportModal = false;
    public $delReportModal = false;
    public ModelsHomecellReport $delReport;
    public $hr;

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
        if (date("w") == 6) {
            $this->hrForm->week = date('Y-m-d',  strtotime("today"));
        } else {
            $this->hrForm->week = date('Y-m-d',  strtotime("last saturday"));
        }
    }

    public function openNewReportModal()
    {
        $this->newReportModal = true;
    }
    public function openDelModal(ModelsHomecellReport $homecellReport)
    {
        $this->delReport = $homecellReport;
        $this->delReportModal = true;
    }

    public function save()
    {
        if ($this->editMode) {
            $this->hrForm->update();
            $this->hrForm->male = "";
            $this->hrForm->female = "";
            $this->hrForm->children = "";
            $this->hrForm->new_convert = "";
            $this->hrForm->first_timer = "";
            $this->hrForm->total = 0;
            $this->hrForm->homecell_id = '';
            $this->resetPage();
            $this->editMode = false;
            $this->newReportModal = false;
        } else {
            // $this->validate();
            $this->hrForm->store();

            $this->hrForm->male = "";
            $this->hrForm->female = "";
            $this->hrForm->children = "";
            $this->hrForm->new_convert = "";
            $this->hrForm->first_timer = "";
            $this->hrForm->total = 0;
            $this->hrForm->homecell_id = '';

            session()->flash('status', 'Post successfully updated.');
            $this->resetPage();
        }
        //return $this->redirect('/my_contact');
    }

    public function delete()
    {
        $this->delReport->delete();
        $this->resetPage();
        $this->delReportModal = false;
    }
    public function update()
    {
        $this->hrForm->update();
        $this->resetPage();
    }
    public function edit(ModelsHomecellReport $hr)
    {
        $this->hrForm->setContact($hr);
        $this->editMode = true;
        $this->newReportModal = true;
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

        $homecellReport = ModelsHomecellReport::where('station_id', auth()->user()->station_id)
            ->search($this->search)
            ->where("week", $this->hrForm->week)
            ->orderBy($this->sortBy, $this->sortDir)
            ->paginate($this->numPerPage);
        // $this->hr = $homecellReport;
        // dd(ResourcesHomecellReport::collection($homecellReport));
        return view(
            'livewire.wsf.homecell-report',
            ['homecellReports' => $homecellReport]
        );
    }
}
