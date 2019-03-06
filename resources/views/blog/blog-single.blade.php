@extends('layouts.app')
@section('content')

    <section class="home-slider owl-carousel img" style="background-image: url(/storage/images/bg_1.jpg);">
        <div class="slider-item" style="background-image: url(/storage/images/bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Read our Blog</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home</a></span> <span
                                    class="mr-2"><a href="{{route('homeBlog')}}">Blog</a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ftco-animate">
                    <h2 class="mb-3">{{$blog->title}}</h2>
                    <img src="{{$blog->getFirstMedia($blog->category)->getUrl()}}" alt="" class="img-fluid">
                    </p>
                    <p>{!!$blog->body!!}</p>

                    <div class="about-author d-flex">
                        <div class="bio align-self-md-center mr-5">
                            <img src="/storage/images/{{$blog->user->logo}}" alt="Image placeholder"
                                 class="img-fluid mb-4">
                        </div>
                        <div class="desc align-self-md-center">
                            <h3>{{$blog->user->name}}</h3>
                            <p>{{$blog->description}}</p>
                        </div>
                    </div>
                    <div class="pt-5 mt-5">
                        <h3 class="mb-5">{{DB::table('comments')->where('blog_id', $blog->id)->count()}} Comments</h3>
                        <ul class="comment-list">
                            @foreach($blog->comments as $comment)
                                <li class="comment">
                                    <div class="vcard bio">
                                        <img src="/storage/images/{{$comment->logo}}" alt="Profile_logo">
                                    </div>
                                    <div class="comment-body">
                                        <h3>{{$comment->name}}</h3>
                                        <div class="meta">{{date('M j, Y H:m', strtotime($comment->created_at))}}</div>
                                        <p>{{$comment->message}}</p>
                                        <p><a href="#" class="reply">Reply</a></p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <!-- END comment-list -->

                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Leave a comment</h3>
                            <form action="{{route('comments.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input type="text" name="name" class="form-control" id="name">
                                </div>
                                <div>
                                    <input type="hidden" name="blog_id" value="{{$blog->id}}">
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" cols="10" rows="5"
                                              class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn py-3 px-4 btn-primary">Post Comment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->
                <div class="col-md-4 sidebar ftco-animate">
                    <div class="sidebar-box">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <div class="icon">
                                    <span class="icon-search"></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>Categories</h3>
                            <li><a href="#">Travel <span>({{DB::table('blogs')->where('category', 'Travel')->count()}})</span></a></li>
                            <li><a href="#">Foods <span>({{DB::table('blogs')->where('category', 'Foods')->count()}})</span></a></li>
                            <li><a href="#">Drinks <span>({{DB::table('blogs')->where('category', 'Drinks')->count()}})</span></a></li>
                            <li><a href="#">Coffee <span>({{DB::table('blogs')->where('category', 'Coffee')->count()}})</span></a></li>
                        </div>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <h3>Recent Blog</h3>
                        @foreach($blogs as $blog)
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url({{$blog->getFirstMedia($blog->category)->getUrl()}});"></a>
                            <div class="text">
                                <h3 class="heading mt-2"><a
                                            href="{{route('blogs.show', ['blog' => $blog])}}">{{$blog->title}}</a></h3>
                                <p>{{\Illuminate\Support\Str::limit($blog->description, 60)}}</p>
                                <div class="meta">
                                    <div><a href="#">{{date('M j, Y', strtotime($blog->created_at))}}</a></div>
                                    <div><a href="#">{{$blog->user->name}}</a></div>
                                    <div><a href="#" class="meta-chat"><span
                                                    class="icon-chat"></span> {{DB::table('comments')->where('blog_id', $blog->id)->count()}}
                                        </a></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- .section -->

@endsection
