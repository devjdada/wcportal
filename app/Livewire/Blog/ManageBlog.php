<?php

namespace App\Livewire\Blog;

use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
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
    public $slug;
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
        $blog = new Blog();
        $blog->title = $this->title;
        $blog->content = $this->content;
        $blog->image = url('storage/' . $this->image->store(path: 'blog'));
        $blog->dated = $this->dated;
        $blog->slug = Str::slug($this->title);
        $blog->station_id = Auth::user()->station_id;
        $blog->user_id = Auth::user()->id;
        $blog->poster_id = Auth::user()->id;
        $blog->save();
        $this->newBlogModal = false;
        $this->reset([
            'title',
            'content',
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