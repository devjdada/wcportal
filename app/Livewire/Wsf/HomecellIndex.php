<?php

namespace App\Livewire\Wsf;

use App\Livewire\Forms\WsfLeader;
use App\Models\Homecell;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.admin')]
class HomecellIndex extends Component
{
    // #[Url()]
    public $search = '';
    public $searchUser = '';
    //#[Url()]
    public $sortBy = 'created_at';
    // #[Url()]
    public $sortDir = 'DESC';
    // #[Url()]
    public $numPerPage = 10;
    public $editMode = false;
    public $hc_selectetd = [];
    public WsfLeader $wlform;
    public $asDialog = false;

    use WithPagination;

    public function assignLeaderDialog(Homecell $homecell)
    {
        $this->wlform->homecell_id = $homecell->id;
        $this->asDialog = true;
    }
    public function assignLeader()
    {
        $this->wlform->store();
        $this->asDialog = false;
    }
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
        $users = User::select('id', 'name', 'phone', 'email')
            ->where('station_id', auth()->user()->station_id)
            ->search($this->searchUser)
            ->get();
        return view('livewire.wsf.homecell-index', [
            'homecells' => $homecell,
            'users' => $users,
        ]);
    }
}
