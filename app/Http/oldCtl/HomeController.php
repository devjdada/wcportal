<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Event;
use App\Models\Testimony;
use Artesaos\SEOTools\Facades\SEOTools;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        SEOTools::setTitle('Home');
        SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl('http://current.url.com');
        SEOTools::setCanonical('https://codecasts.com.br/lesson');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');


         $testimonies = Testimony::limit(3)->orderBy('id', 'desc')->get();
        // $testimonies = Testimony::wherePublished(true)->limit(3)->orderBy('id', 'desc')->get();
         //$blogs = Blog::wherePublished(true)->limit(3)->orderBy('id', 'desc')->get();
         $blogs = Blog::limit(3)->orderBy('id', 'desc')->get();
         $events = Event::all();
        return view('home')->with('testimonies', $testimonies)->with('blogs', $blogs)->with('events', $events);
    }

    public function coming_soon(){
        return view('coming_soon');
    }

    public function admin(){
        return view('ad.admin');
    }
}
