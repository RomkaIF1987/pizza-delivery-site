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
                        <td class="dropdown">
                            <button type="button" class="btn btn-dark dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action
                                <span class="carret"></span></button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item"
                                       href="{{route('reduceByOneCart', ['id' => $product['item']['id']])}}"> Reduce by
                                        1 </a>
                                <a class="dropdown-item"
                                       href="{{route('removeItemCart', ['id' => $product['item']['id']])}}"> Reduce
                                        all</a>
                            </div>
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
        <form action="{{route('orders.store')}}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{$user->id}}">
            <input type="hidden" name="user_name" value="{{$user->name}}">
            <input type="hidden" name="user_address"
                   value="{{$user->city.', '.$user->street.', '.$user->house.', '.$user->room }}">
            <input type="hidden" name="user_phone" value="{{$user->phone}}">
            <input type="hidden" name="sum" value="{{$totalPrice}}">
            <input type="hidden" name="itemOrders" value="{{json_encode($itemOrders)}}">
            <button type="submit" class="btn btn-primary" style="margin-left: 15px">Confirm</button>
        </form>
    @else
        <div class="row ml-5">
            <h2>No Items in a Cart</h2>
        </div>
    @endif
@endsection