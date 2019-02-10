<?php

namespace App\Http\Controllers;

use App\Models\Pizza;

class HomeController extends Controller
{
    /**
     * Show home-page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('site.index');
//        return view('home-page',[
//            'pizzas' => Pizza::all()
//        ]);
    }

    public function about()
    {
        return view('site.about');
    }

    public function blog()
    {
        return view('site.blog');
    }

    public function blogSingle()
    {
        return view('site.blog-single');
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function menu()
    {
        return view('site.menu');
    }

    public function services()
    {
        return view('site.services');
    }
}

