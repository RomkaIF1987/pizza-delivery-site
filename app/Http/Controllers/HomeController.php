<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Show home-page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home-page');
    }
}
