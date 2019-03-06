<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersTableRequest;
use App\Models\Blog;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create', [
            'user' => new User(),
            'blogs' => Blog::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UsersTableRequest $request
     * @return void
     */
    public function store(UsersTableRequest $request)
    {
        $params = $request->validated();
        $params['password'] = Hash::make($request->password);
        $user = User::create($params);

        flash('Your registration has been successful, please login.')->success();

        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('users.show', [
            'user' => Auth::user(),
            'blogs' => Blog::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('users.edit', [
            'user' => auth()->user(),
            'blogs' => Blog::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UsersTableRequest $request
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function update(UsersTableRequest $request, User $user)
    {
        $params = $request->validated();
        $user->update($params);

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('home');
    }
}
