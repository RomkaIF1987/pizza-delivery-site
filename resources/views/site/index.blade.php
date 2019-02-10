@extends('layouts.app')
@section('content')

    <section class="home-slider owl-carousel img" style="background-image: url(storage/images/bg_1.jpg);">
        <div class="slider-item">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center" data-scrollax-parent="true">

                    <div class="col-md-6 col-sm-12 ftco-animate">
                        <span class="subheading">Delicious</span>
                        <h1 class="mb-4">Italian Cuizine</h1>
                        <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the
                            necessary regelialia.</p>
                        <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>
                            <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a>
                        </p>
                    </div>
                    <div class="col-md-6 ftco-animate">
                        <img src="storage/images/bg_1.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center" data-scrollax-parent="true">

                    <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
                        <span class="subheading">Crunchy</span>
                        <h1 class="mb-4">Italian Pizza</h1>
                        <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the
                            necessary regelialia.</p>
                        <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>
                            <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
                    </div>
                    <div class="col-md-6 ftco-animate">
                        <img src="storage/images/bg_2.png" class="img-fluid" alt="">
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url(storage/images/bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Welcome</span>
                        <h1 class="mb-4">We cooked your desired Pizza Recipe</h1>
                        <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the
                            necessary regelialia.</p>
                        <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>
                            <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @include('site.partials.about')

    @include('site.partials.services')

    <section class="ftco-section">
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

        @include('site.partials.firstMenu')

    </section>

    @include('site.partials.gallery')

    @include('site.partials.secondMenu')

    @include('site.partials.blog')

    @include('site.partials.contact')

@endsection