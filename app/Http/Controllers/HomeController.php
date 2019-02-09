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
}
