<?php

namespace App\Http\Controllers;

use App\Classes\Order;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'users' => User::all(),
            'orders' => Order::all()
        ]);
    }

    public function userEdit(User $user)
    {
        return view('admin.users-edit', [
            'user' => $user
        ]);
    }
}
