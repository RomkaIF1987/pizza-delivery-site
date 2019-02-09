<?php

namespace App\Http\Controllers;

use App\Http\Requests\PizzaTableRequest;
use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pizza.create', [
            'pizza' => new Pizza()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PizzaTableRequest $request
     * @return void
     */
    public function store(PizzaTableRequest $request)
    {
        $params = $request->validated();

        $pizza = Pizza::create($params);

        if (request()->hasFile('pizza_image')) {
            $pizza->addMedia(request()->file('pizza_image'))->toMediaCollection('pizza_images');
        }

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pizza $pizza
     * @return \Illuminate\Http\Response
     */
    public function show(Pizza $pizza)
    {
        $mediaItems = $pizza->getMedia();
        dd($mediaItems);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pizza $pizza
     * @return \Illuminate\Http\Response
     */
    public function edit(Pizza $pizza)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Pizza $pizza
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pizza $pizza)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pizza $pizza
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pizza $pizza)
    {
        //
    }

    /**
     * Set the polymorphic relation.
     *
     * @return mixed
     */
    public function media()
    {
        // TODO: Implement media() method.
    }

    /**
     * Move a file to the medialibrary.
     *
     * @param string|\Symfony\Component\HttpFoundation\File\UploadedFile $file
     *
     * @return \Spatie\MediaLibrary\FileAdder\FileAdder
     */
    public function addMedia($file)
    {
        // TODO: Implement addMedia() method.
    }

    /**
     * Copy a file to the medialibrary.
     *
     * @param string|\Symfony\Component\HttpFoundation\File\UploadedFile $file
     *
     * @return \Spatie\MediaLibrary\FileAdder\FileAdder
     */
    public function copyMedia($file)
    {
        // TODO: Implement copyMedia() method.
    }

    /**
     * Determine if there is media in the given collection.
     *
     * @param $collectionMedia
     *
     * @return bool
     */
    public function hasMedia(string $collectionMedia = ''): bool
    {
        // TODO: Implement hasMedia() method.
    }

    /**
     * Get media collection by its collectionName.
     *
     * @param string $collectionName
     * @param array|callable $filters
     *
     * @return \Illuminate\Support\Collection
     */
    public function getMedia(string $collectionName = 'default', $filters = [])
    {
        // TODO: Implement getMedia() method.
    }

    /**
     * Remove all media in the given collection.
     *
     * @param string $collectionName
     */
    public function clearMediaCollection(string $collectionName = 'default')
    {
        // TODO: Implement clearMediaCollection() method.
    }

    /**
     * Remove all media in the given collection except some.
     *
     * @param string $collectionName
     * @param \Spatie\MediaLibrary\Media[]|\Illuminate\Support\Collection $excludedMedia
     *
     * @return string $collectionName
     */
    public function clearMediaCollectionExcept(string $collectionName = 'default', $excludedMedia = [])
    {
        // TODO: Implement clearMediaCollectionExcept() method.
    }

    /**
     * Determines if the media files should be preserved when the media object gets deleted.
     *
     * @return bool
     */
    public function shouldDeletePreservingMedia()
    {
        // TODO: Implement shouldDeletePreservingMedia() method.
    }

    /**
     * Cache the media on the object.
     *
     * @param string $collectionName
     *
     * @return mixed
     */
    public function loadMedia(string $collectionName)
    {
        // TODO: Implement loadMedia() method.
    }

    public function addMediaConversion(string $name): Conversion
    {
        // TODO: Implement addMediaConversion() method.
    }

    public function registerMediaConversions(Media $media = null)
    {
        // TODO: Implement registerMediaConversions() method.
    }

    public function registerMediaCollections()
    {
        // TODO: Implement registerMediaCollections() method.
    }

    public function registerAllMediaConversions()
    {
        // TODO: Implement registerAllMediaConversions() method.
    }
}
