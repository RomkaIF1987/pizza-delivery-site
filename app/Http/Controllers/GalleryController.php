<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalleryTableRequest;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
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
     *
     */
    public function create()
    {
        return view('gallery.create', [
            'gallery' => new Gallery()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param GalleryTableRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryTableRequest $request)
    {
        $params = $request->validated();

        $gallery = Gallery::create($params);

        if (request()->hasFile('gallery_image')) {
            $gallery->addMedia(request()->file('gallery_image'))->toMediaCollection('gallery_images');
        }

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
