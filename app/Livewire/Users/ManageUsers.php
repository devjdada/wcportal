<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin')]
class ManageUsers extends Component
{
    // #[Url()]
    public $search = '';
    //#[Url()]
    public $sortBy = 'created_at';
    // #[Url()]
    public $sortDir = 'DESC';
    // #[Url()]
    public $numPerPage = 10;


    public function render()
    {
        $users = User::where('station_id', auth()->user()->station_id)
            ->search($this->search)
            ->orderBy($this->sortBy, $this->sortDir)
            ->paginate($this->numPerPage);
        return view(
            'livewire.users.manage-users',
            ['users' => $users]
        );
    }
}
