<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuItemTableRequest;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menuItem.create', [
            'menuItem' => new MenuItem()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param MenuItemTableRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuItemTableRequest $request)
    {
        $params = $request->validated();

        $menuItem = MenuItem::create($params);

        if (request()->hasFile('image')) {
            $menuItem->addMedia(request()->file('image'))->toMediaCollection($params['type']);
        }

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MenuItem  $menuItem
     * @return \Illuminate\Http\Response
     */
    public function show(MenuItem $menuItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param MenuItem $menuItem
     * @return \Illuminate\Http\Response
     */
    public function edit(MenuItem $menuItem)
    {
        return view('menuItem.edit', [
            'menuItem' => $menuItem
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param MenuItemTableRequest $request
     * @param MenuItem $menuItem
     * @return void
     */
    public function update(MenuItemTableRequest $request, MenuItem $menuItem)
    {
        $params = $request->validated();

        $menuItem->update($params);

        if (request()->hasFile('image')) {
            $menuItem->replaceMedia(request()->file('image'))->toMediaCollection($params['type']);
        }

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param MenuItem $menuItem
     * @return void
     * @throws \Exception
     */
    public function destroy(MenuItem $menuItem)
    {
        $menuItem->delete();

        return back();
    }
}
