<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Recent from blog</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live
                    the blind texts.</p>
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
</section>
