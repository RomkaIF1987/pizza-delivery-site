<?php

namespace App\Http\Controllers;

use App\Classes\Order;
use App\Models\MenuItem;
use App\Models\User;
use App\Models\Blog;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'users' => User::all(),
            'orders' => Order::all(),
            'menuItems' => MenuItem::all(),
            'blogs' => Blog::all()
        ]);
    }

    public function userEdit(User $user)
    {
        return view('admin.users-edit', [
            'user' => $user,
            'blogs' => Blog::all()
        ]);
    }
    public function charts()
    {
        return view('admin.charts', [
            'users' => User::all(),
            'orders' => Order::all(),
            'blogs' => Blog::all()
        ]);
    }
}
