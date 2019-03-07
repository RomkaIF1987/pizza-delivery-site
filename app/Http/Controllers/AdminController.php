<?php

namespace App\Http\Controllers;

use App\Classes\Order;
use App\Models\Gallery;
use App\Models\MenuItem;
use App\Models\User;
use App\Models\Blog;

class AdminController extends Controller
{
    /** return index page for Admin Panel
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.index', [
            'users' => User::all(),
            'orders' => Order::all(),
            'menuItems' => MenuItem::all(),
            'blogs' => Blog::all(),
            'galleries' => Gallery::all()
        ]);
    }

    /**
     * Edit user from Admin Panel
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function userEdit(User $user)
    {
        return view('admin.users-edit', [
            'user' => $user,
            'blogs' => Blog::all()
        ]);
    }

    /**
     * View Charts from Admin Panel
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function charts()
    {
        return view('admin.charts', [
            'users' => User::all(),
            'orders' => Order::all(),
            'blogs' => Blog::all()
        ]);
    }
}
