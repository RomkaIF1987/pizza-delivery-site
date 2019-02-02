@extends('layouts.app')
@section('content')
<!-- First Container -->
<div class="container-fluid bg-1 text-center">
    <h3 class="margin">PIZZERIA</h3>
    <img src="images/pizzaHP.jpg" class=""
         style="display:inline" alt="Bird" width="1920" height="">
    <h3>Bon appetit</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
    <h3 class="margin">Discounts</h3>
    <p>Buy nine pizza get tenth as a gift </p>
    <a href="#" class="btn btn-default btn-lg">
        <span class="glyphicon"></span> About promotions
    </a>
</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">
    <h3 class="margin">Сhoose your pizza</h3><br>
    <div class="row">
        <div class="col-sm-4">
            <img src="images/salami.png" class="img-responsive margin" style="width:100%" alt="Image">
            <p>Salami</p>
        </div>
        <div class="col-sm-4">
            <img src="images/margarita.png" class="img-responsive margin" style="width:100%" alt="Image">
            <p>Margarita</p>
        </div>
        <div class="col-sm-4">
            <img src="images/caprichosa.png" class="img-responsive margin" style="width:100%" alt="Image">
            <p>Caprichosa</p>
        </div>
    </div>
</div>
@endsection