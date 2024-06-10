<?php

namespace App\Livewire\Wsf;

use App\Models\Homecell;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.admin')]
class HomecellIndex extends Component
{
    // #[Url()]
    public $search = '';
    //#[Url()]
    public $sortBy = 'created_at';
    // #[Url()]
    public $sortDir = 'DESC';
    // #[Url()]
    public $numPerPage = 10;
    public $editMode = false;
    public $hc_selectetd = [];

    use WithPagination;

    public function openNewHCdialog()
    {
    }
    public function edit(Homecell $homecell)
    {
    }
    public function delete(Homecell $homecell)
    {
    }
    public function report(Homecell $homecell)
    {
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
        $homecell = Homecell::where('station_id', auth()->user()->station_id)
            ->search($this->search)
            ->orderBy($this->sortBy, $this->sortDir)
            ->paginate($this->numPerPage);
        return view('livewire.wsf.homecell-index', [
            'homecells' => $homecell
        ]);
    }
}
