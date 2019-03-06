<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalleryTableRequest;
use App\Models\Blog;
use App\Models\Gallery;
use foo\bar;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        return view('gallery.create', [
            'gallery' => new Gallery(),
            'blogs' => Blog::all()
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
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();

        return back();
    }
}
