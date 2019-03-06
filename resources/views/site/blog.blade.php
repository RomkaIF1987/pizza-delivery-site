@extends('layouts.app')
@section('content')

    <section class="home-slider owl-carousel img" style="background-image: url(storage/images/bg_1.jpg);">
        <div class="slider-item" style="background-image: url(storage/images/bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Read our Blog</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home</a></span>
                            <span>Blog</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Read our blog</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                </div>
            </div>
            <div class="row d-flex">
                @foreach($blogs as $blog)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="#" class="block-20"
                               style="background-image: url({{$blog->getFirstMedia($blog->category)->getUrl()}});">
                            </a>
                            <div class="text py-4 d-block">
                                <div class="meta">
                                    <div><a href="#">{{date('M j, Y', strtotime($blog->created_at))}}</a></div>
                                    <div><a href="#">{{$blog->user->name}}</a></div>
                                    <div><a href="#" class="meta-chat"><span
                                                    class="icon-chat"></span> {{DB::table('comments')->where('blog_id', $blog->id)->count()}}
                                        </a></div>
                                </div>
                                <h3 class="heading mt-2"><a
                                            href="{{route('blogs.show', ['blog' => $blog])}}">{{$blog->title}}</a></h3>
                                <p>{{\Illuminate\Support\Str::limit($blog->description, 90)}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="align-content-center">{{$blogs->links()}}</div>
    </section>
@endsection
