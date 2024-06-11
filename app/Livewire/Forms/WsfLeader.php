<?php

namespace App\Livewire\Forms;

use App\Models\Homecell;
use App\Models\HomecellLeader;
use App\Models\User;
use App\Models\WsfLeader as ModelsWsfLeader;
use App\Models\WsfMember;
use Livewire\Attributes\Validate;
use Livewire\Form;

class WsfLeader extends Form
{
    public HomecellLeader $wl;
    public $id = '';
    #[Validate('required')]
    public $position = '';
    public $about = '';
    public $station_id = '';
    public $end = '';
    public $start = '';
    #[Validate('required')]
    public $homecell_id = '';
    #[Validate('required')]
    public $user_id = '';


    public function setContact(HomecellLeader $wl)
    {
        $this->wl = $wl;
        $this->wl->end = $wl->end;
        $this->wl->start = $wl->start;
        $this->wl->position = $wl->position;
        $this->wl->about = $wl->about;
        $this->wl->unit_id = $wl->unit_id;
        $this->wl->station_id = $wl->station_id;
    }

    public function store()
    {
        $this->station_id = auth()->user()->station_id;
        $this->end = now();
        $this->start = now();
        $this->validate();
        if ($this->position == 'provider') {
            $hc = Homecell::find($this->homecell_id);
            $u = User::find($this->user_id);
            $hc->about = $u->name;
            $hc->phone = $u->phone;
            $hc->save();
        }
        HomecellLeader::create($this->all());
        $wm = WsfMember::where('user_id', $this->user_id)
            ->where('homecell_id', $this->homecell_id)
            ->first();
        if (!$wm) {
            WsfMember::create([
                'station_id' => $this->station_id,
                'user_id' => $this->user_id,
                'homecell_id' => $this->homecell_id,
            ]);
        }
        $this->reset(['user_id', 'about',  'position', 'end', 'start']);
    }

    public function update()
    {
        $this->validate();
        $this->wl->update($this->all());
    }
}
