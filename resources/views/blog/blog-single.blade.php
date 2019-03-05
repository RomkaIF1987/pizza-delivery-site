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
                        <h3 class="mb-5">6 Comments</h3>
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
                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="images/person_1.jpg" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                    <h3>John Doe</h3>
                                    <div class="meta">June 27, 2018 at 2:21pm</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                                        necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim
                                        sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                    <p><a href="#" class="reply">Reply</a></p>
                                </div>
                                <ul class="children">
                                    <li class="comment">
                                        <div class="vcard bio">
                                            <img src="images/person_1.jpg" alt="Image placeholder">
                                        </div>
                                        <div class="comment-body">
                                            <h3>John Doe</h3>
                                            <div class="meta">June 27, 2018 at 2:21pm</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem
                                                laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat
                                                saepe enim sapiente iste iure! Quam voluptas earum impedit
                                                necessitatibus, nihil?</p>
                                            <p><a href="#" class="reply">Reply</a></p>
                                        </div>
                                        <ul class="children">
                                            <li class="comment">
                                                <div class="vcard bio">
                                                    <img src="images/person_1.jpg" alt="Image placeholder">
                                                </div>
                                                <div class="comment-body">
                                                    <h3>John Doe</h3>
                                                    <div class="meta">June 27, 2018 at 2:21pm</div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Pariatur quidem laborum necessitatibus, ipsam impedit vitae
                                                        autem, eum officia, fugiat saepe enim sapiente iste iure! Quam
                                                        voluptas earum impedit necessitatibus, nihil?</p>
                                                    <p><a href="#" class="reply">Reply</a></p>
                                                </div>

                                                <ul class="children">
                                                    <li class="comment">
                                                        <div class="vcard bio">
                                                            <img src="images/person_1.jpg" alt="Image placeholder">
                                                        </div>
                                                        <div class="comment-body">
                                                            <h3>John Doe</h3>
                                                            <div class="meta">June 27, 2018 at 2:21pm</div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Pariatur quidem laborum necessitatibus, ipsam impedit
                                                                vitae autem, eum officia, fugiat saepe enim sapiente
                                                                iste iure! Quam voluptas earum impedit necessitatibus,
                                                                nihil?</p>
                                                            <p><a href="#" class="reply">Reply</a></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="images/person_1.jpg" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                    <h3>John Doe</h3>
                                    <div class="meta">June 27, 2018 at 2:21pm</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                                        necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim
                                        sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                    <p><a href="#" class="reply">Reply</a></p>
                                </div>
                            </li>
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
                                    <textarea name="message" id="summernote" cols="20" rows="10"
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
                            <li><a href="#">Tour <span>(12)</span></a></li>
                            <li><a href="#">Hotel <span>(22)</span></a></li>
                            <li><a href="#">Coffee <span>(37)</span></a></li>
                            <li><a href="#">Drinks <span>(42)</span></a></li>
                            <li><a href="#">Foods <span>(14)</span></a></li>
                            <li><a href="#">Travel <span>(140)</span></a></li>
                        </div>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <h3>Recent Blog</h3>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                        blind texts</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                        blind texts</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                        blind texts</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Paragraph</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem
                            necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente
                            consectetur similique, inventore eos fugit cupiditate numquam!</p>
                    </div>
                </div>

            </div>
        </div>
    </section> <!-- .section -->

@endsection
