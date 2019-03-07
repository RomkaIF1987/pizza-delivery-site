<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogTableRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * View Blog posts on the home page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.blog',[
            'blogs' => Blog::all()
        ]);
    }

    /**
     * Create a new blog post
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create',[
            'blog' => new Blog(),
            'blogs' => Blog::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogTableRequest $request)
    {
        $params = $request->validated();

        $blog = Blog::create($params);

        if (request()->hasFile('image')) {
            $blog->addMedia(request()->file('image'))->toMediaCollection($params['category']);
        }

        return redirect()->route('homeBlog');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('blog.blog-single', [
            'blog' => $blog,
            'blogs' => Blog::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('blog.edit', [
            'blog' => $blog,
            'blogs' => Blog::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(BlogTableRequest $request, Blog $blog)
    {
        $params = $request->validated();

        $blog->update($params);

        if (request()->hasFile('image')) {
            $blog->addMedia(request()->file('image'))->toMediaCollection($params['category']);
        }

        return redirect(route('adminPanelIndex'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
    }
}
