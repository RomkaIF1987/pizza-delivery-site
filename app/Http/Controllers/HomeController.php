<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Gallery;
use App\Models\MenuItem;

class HomeController extends Controller
{
    /**
     * Show home-page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('site.index', [
            'pizzas' => MenuItem::all()->where('type', 'pizza'),
            'drinks' => MenuItem::all()->where('type', 'drinks'),
            'burgers' => MenuItem::all()->where('type', 'burgers'),
            'pasta' => MenuItem::all()->where('type', 'pasta'),
            'galleries' => Gallery::all(),
            'blogs' => Blog::all()
        ]);
    }

    public function about()
    {
        return view('site.about',[
            'blogs' => Blog::all()
        ]);
    }

    public function blog()
    {
        return view('site.blog',[
            'blogs' => Blog::paginate(6)
        ]);
    }

    public function blogSingle()
    {
        return view('site.blog-single', [
            'blogs' => Blog::all()
        ]);
    }

    public function contact()
    {
        return view('site.contact', [
            'blogs' => Blog::all()
        ]);
    }

    public function menu()
    {
        return view('site.menu', [
            'pizzas' => MenuItem::all()->where('type', 'pizza'),
            'drinks' => MenuItem::all()->where('type', 'drinks'),
            'burgers' => MenuItem::all()->where('type', 'burgers'),
            'pasta' => MenuItem::all()->where('type', 'pasta'),
            'blogs' => Blog::all()
        ]);
    }

    public function services()
    {
        return view('site.services', [
            'pizzas' => MenuItem::all()->where('type', 'pizza'),
            'drinks' => MenuItem::all()->where('type', 'drinks'),
            'burgers' => MenuItem::all()->where('type', 'burgers'),
            'pasta' => MenuItem::all()->where('type', 'pasta'),
            'blogs' => Blog::all()
        ]);
    }
}

