<section class="ftco-section" id="firstMenu">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Hot Pizza Meals</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live
                    the blind texts.</p>
            </div>
        </div>
    </div>
    <div class="container-wrap">
        <div class="row no-gutters d-flex">
            @foreach($pizzas as $pizza)
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img"
                           style="background-image: url({{$pizza->getFirstMedia('pizza_images')->getUrl()}});"></a>
                        <div class="text p-4">
                            <h3>{{$pizza->name}}</h3>
                            <p>{{$pizza->description}}</p>
                            <p class="price"><span>${{$pizza->price}}</span>
                                @auth
                                    <a href="{{route('addToCart', ['id' => $pizza->id])}}"
                                       class="ml-2 btn btn-white btn-outline-white">Order</a>
                                @endauth
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4">Our Menu Pricing</h2>
                <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia,
                    there live the blind texts.</p>
            </div>
        </div>
        <div class="row">
            @foreach($pizzas as $pizza)
                <div class="col-md-6">
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img"
                             style="background-image: url({{$pizza->getFirstMedia('pizza_images')->getUrl()}});"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>{{$pizza->name}}</span></h3>
                                <span class="price">${{$pizza->price}}</span>
                            </div>
                            <div class="d-block">
                                <p>{{$pizza->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
