<section class="ftco-menu">
    <div class="container-fluid">
        <div class="row d-md-flex">
            <div class="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0"
                 style="background-image: url(storage/images/about.jpg);">
            </div>
            <div class="col-lg-8 ftco-animate p-md-5">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap mb-5">
                        <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist"
                             aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
                               role="tab" aria-controls="v-pills-1" aria-selected="true">Pizza</a>

                            <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
                               aria-controls="v-pills-2" aria-selected="false">Drinks</a>

                            <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab"
                               aria-controls="v-pills-3" aria-selected="false">Burgers</a>

                            <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab"
                               aria-controls="v-pills-4" aria-selected="false">Pasta</a>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex align-items-center">

                        <div class="tab-content ftco-animate" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                 aria-labelledby="v-pills-1-tab">
                                <div class="row">
                                    @foreach($pizzas->take(3) as $pizza)
                                        <div class="col-md-4 text-center">
                                            <div class="menu-wrap">
                                                <div class="menu-img img mb-4"
                                                     style="background-image: url({{$pizza->getFirstMedia('pizza')->getUrl()}});"></div>
                                                <div class="text">
                                                    <h3>{{$pizza->name}}</h3>
                                                    <p>{{$pizza->description}}</p>
                                                    <p class="price"><span>${{$pizza->price}}</span></p>
                                                    @auth
                                                        <p><a href="{{route('addToCart', ['id' => $pizza->id ])}}"
                                                              class="btn btn-white btn-outline-white">Add to
                                                                cart</a>
                                                        </p>
                                                    @endauth
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                 aria-labelledby="v-pills-2-tab">
                                <div class="row">
                                    @foreach($drinks->take(3) as $drink)
                                        <div class="col-md-4 text-center">
                                            <div class="menu-wrap">
                                                <div class="menu-img img mb-4"
                                                     style="background-image: url({{$drink->getFirstMedia('drinks')->getUrl()}});"></div>
                                                <div class="text">
                                                    <h3>{{$drink->name}}</h3>
                                                    <p>{{$drink->description}}</p>
                                                    <p class="price"><span>${{$drink->price}}</span></p>
                                                    @auth
                                                        <p><a href="{{route('addToCart', ['id' => $drink->id ])}}"
                                                              class="btn btn-white btn-outline-white">Add to
                                                                cart</a>
                                                        </p>
                                                    @endauth
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-3" role="tabpanel"
                                 aria-labelledby="v-pills-3-tab">
                                <div class="row">
                                    @foreach($burgers->take(3) as $burger)
                                        <div class="col-md-4 text-center">
                                            <div class="menu-wrap">
                                                <div class="menu-img img mb-4"
                                                     style="background-image: url({{$burger->getFirstMedia('burgers')->getUrl()}});"></div>
                                                <div class="text">
                                                    <h3>{{$burger->name}}</h3>
                                                    <p>{{$burger->description}}</p>
                                                    <p class="price"><span>${{$burger->price}}</span></p>
                                                    @auth
                                                        <p><a href="{{route('addToCart', ['id' => $burger->id ])}}"
                                                              class="btn btn-white btn-outline-white">Add to
                                                                cart</a>
                                                        </p>
                                                    @endauth
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-4" role="tabpanel"
                                 aria-labelledby="v-pills-4-tab">
                                <div class="row">
                                    @foreach($pasta->take(3) as $macaroni)
                                        <div class="col-md-4 text-center">
                                            <div class="menu-wrap">
                                                <div class="menu-img img mb-4"
                                                     style="background-image: url({{$macaroni->getFirstMedia('pasta')->getUrl()}});"></div>
                                                <div class="text">
                                                    <h3>{{$macaroni->name}}</h3>
                                                    <p>{{$macaroni->description}}</p>
                                                    <p class="price"><span>${{$macaroni->price}}</span></p>
                                                    @auth
                                                        <p>
                                                            <a href="{{route('addToCart', ['id' => $macaroni->id ])}}"
                                                               class="btn btn-white btn-outline-white">Add to
                                                                cart</a>
                                                        </p>
                                                    @endauth
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
