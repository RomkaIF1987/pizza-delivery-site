@extends('layouts.app')
@section('content')
    <br>
    <br>
    <br>
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item">
                            <span class="badge">{{$product['qty']}}</span>
                            <strong>{{$product['item']['name']}}</strong>
                            <span>{{$product['price']}}</span>
                            <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">Action
                                <span class="carret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#"> Reduce by 1 </a></li>
                                <li><a href="#"> Reduce all</a></li>
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <strong>Total: {{$totalPrice}}</strong>
        </div>
        <div class="row">
            <a href="{{route('cartConfirm')}}" class="btn btn-primary">Confirm</a>
        </div>
    @else
        <div class="row">
            <strong>No Items in a Cart</strong>
        </div>
    @endif
@endsection