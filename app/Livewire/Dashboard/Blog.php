<?php

namespace App\Livewire\Dashboard;

use App\Models\Blog as ModelsBlog;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Blog extends Component
{
    public function render()
    {
        $blogs = ModelsBlog::where('station_id', Auth::user()->station_id)
            ->get();
        return view('livewire.dashboard.blog', [
            'blogs' => $blogs
        ]);
    }
}
