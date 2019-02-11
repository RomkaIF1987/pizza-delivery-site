@extends('layouts.app')
@section('content')
    <br>
    @if(Session::has('cart'))
        <div class="table">
            <table style="width: 60%;">
                <tr>
                    <th>Items</th>
                    <th>Product name</th>
                    <th>Quantyty</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                @foreach($products as $product)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$product['item']['name']}}</td>
                        <td>{{$product['qty']}}</td>
                        <td>${{$product['price']}}</td>
                        <td>
                            <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">Action
                                <span class="carret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                       href="{{route('reduceByOneCart', ['id' => $product['item']['id']])}}"> Reduce by
                                        1 </a></li>
                                <li><a class="dropdown-item"
                                       href="{{route('removeItemCart', ['id' => $product['item']['id']])}}"> Reduce
                                        all</a></li>
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="row">
            <div class="col-md-6">
                <strong><h2> Total: ${{$totalPrice}}</h2></strong>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-md-6">
                <a href="{{route('cartConfirm')}}" class="btn btn-primary">Confirm</a>
            </div>
        </div>
    @else
        <div class="row ml-5">
            <h2>No Items in a Cart</h2>
        </div>
    @endif
@endsection