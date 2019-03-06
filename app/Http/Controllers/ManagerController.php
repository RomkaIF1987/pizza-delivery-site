<?php

namespace App\Http\Controllers;

use App\Classes\Order;
use App\Models\Blog;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manager.index', [
            'orders' => Order::all()->where('orders_completed', false),
            'blogs' => Blog::all()
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function completeOrder()
    {
        return view('manager.index-complete', [
            'orders' => Order::all()->where('orders_completed', true),
            'blogs' => Blog::all()
        ]);
    }
}
