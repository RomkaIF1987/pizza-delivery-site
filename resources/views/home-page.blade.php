@extends('layouts.app')
@section('content')
    @include('flash::message')
    <!-- First Container -->
    <div class="container-fluid bg-1 text-center">
        <h3 class="margin">PIZZERIA</h3>
        <img src="storage/images/pizzaHP.jpg" class=""
             style="display:inline" alt="Bird" width="1920" height="">
        <h3 class="mb-0 pb-3 pt-3">Bon appetit</h3>
    </div>

    <!-- Second Container -->
    <div class="container-fluid bg-2 text-center">
        <h3 class="margin">Discounts</h3>
        <p>Buy nine pizza get tenth as a gift </p>
        <a href="#" class="btn btn-outline-light btn-lg mb-4">
            <span class="glyphicon"></span> About promotions
        </a>
    </div>

    <!-- Third Container (Grid) -->
    <div class="container-fluid bg-3 text-center" id="pizza">
        <h3 class="margin">Сhoose your pizza</h3><br>
        <div class="row">
            @foreach($pizzas as $pizza)
                <div class="col-sm-4">
                    <img src="{{$pizza->getFirstMedia('pizza_images')->getUrl()}}" class="img-responsive margin"
                         style="width:100%" alt="Image">
                    <h3>{{$pizza->name}}</h3>
                    <p>{{$pizza->description}}</p>
                    <p>{{$pizza->price}}₴</p>
                    <a href="{{route('addToCart', ['id' => $pizza->id])}}" class="btn btn-primary pull-right">Add to
                        cart</a>
                </div>
            @endforeach
        </div>
@endsection