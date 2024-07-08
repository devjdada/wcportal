<?php

namespace App\Livewire\Testy;

use App\Models\Testimony;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

#[Layout('layouts.admin')]
class ManageTesty extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $search;
    public $sortField = 'id';
    public $sortAsc = true;
    public $perPage = 10;

    public $showEditModal = false;
    public $showDeleteModal = false;
    public $showCreateModal = false;
    public $showFilters = false;
    public $title;
    public $image;
    public $email;
    public $phone;
    public $status;
    public $testimony;
    public $name;



    public function save()
    {
        $this->validate([
            'name' => 'required',
            'title' => 'required',
            'testimony' => 'required',
            'image' => 'image|max:1024',
        ]);
        $image = Storage::disk('goro')->put('testimony', $this->image);
        $testimony = new Testimony();
        $testimony->name = $this->name;
        $testimony->email = $this->email;
        $testimony->phone = $this->phone;
        $testimony->title = $this->title;
        $testimony->testimony = $this->testimony;
        $testimony->status = 'pending';
        $testimony->image = url('static/' . $image);
        $testimony->station_id = Auth::user()->station_id;
        $testimony->poster_id = Auth::user()->id;
        $testimony->user_id = Auth::user()->id;
        $testimony->save();
        $this->showCreateModal = false;
        $this->reset([
            'name',
            'title',
            'testimony',
            'image',
            'email',
            'phone',
        ]);
    }

    public function openCreateModal()
    {
        $this->showCreateModal = true;
    }

    public function render()
    {

        $testimonies = Testimony::where('station_id', Auth::user()->station_id)->get();
        return view('livewire.testy.manage-testy', [
            'testimonies' => $testimonies
        ]);
    }
}
