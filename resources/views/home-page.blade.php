@extends('layouts.app')
@section('content')
    <style>
        .margin {
            padding: 70px 0 50px 0;
        }
    </style>
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
            <div class="col-sm-4">
                <img src="storage/images/salami.png" class="img-responsive margin" style="width:100%" alt="Image">
                <p>Salami</p>
            </div>
            <div class="col-sm-4">
                <img src="storage/images/margarita.png" class="img-responsive margin" style="width:100%" alt="Image">
                <p>Margarita</p>
            </div>
            <div class="col-sm-4">
                <img src="storage/images/caprichosa.png" class="img-responsive margin" style="width:100%" alt="Image">
                <p>Caprichosa</p>
            </div>
        </div>
    </div>
@endsection