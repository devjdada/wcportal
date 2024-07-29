<?php

namespace App\Livewire\Blog;

use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.admin')]
class ManageBlog extends Component
{
    public $blogId;
    public $title;
    public $content;
    public $image;
    public $dated;
    public $summary;
    public $slug;
    public $views;
    public $newBlogModal = false;
    public $isModalDelete = false;
    use WithFileUploads;

    public function openNewBlogModal()
    {
        $this->newBlogModal = true;
    }

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|max:1024',
        ]);
        $image = Storage::disk('goro')->put('blog', $this->image);
        $blog = new Blog();
        $blog->title = $this->title;
        $blog->views = 0;
        $blog->content = $this->content;
        $blog->image = url('static/' . $image);
        $blog->dated = $this->dated;
        $blog->summary = $this->summary;
        $blog->slug = Str::slug($this->title);
        $blog->station_id = Auth::user()->station_id;
        $blog->user_id = Auth::user()->id;
        $blog->poster_id = Auth::user()->id;
        $blog->save();
        $this->newBlogModal = false;
        $this->reset([
            'title',
            'content',
            'summary',
            'image',
            'dated',
            'slug',
        ]);
    }

    public function render()
    {
        $blogs = Blog::where('station_id', Auth::user()->station_id)->get();
        return view('livewire.blog.manage-blog', ['blogs' => $blogs]);
    }
}
