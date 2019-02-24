@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-12 d-flex ftco-animate">
                <h2>Order {{$orders->id}}</h2>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-12 d-flex ftco-animate">
                <div class="table">
                    <table style="width: 60%;">
                        <tr>
                            <th>Items</th>
                            <th>Product name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>

                        @foreach($orders->orderItems as $orderItem)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$orderItem->pizza->name}}</td>
                                <td>{{$orderItem->quantity}}</td>
                                <td>${{$orderItem->sum}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div>
            <div class="col-md-6">
                <strong><h2> Total: {{$orders->sum}}$</h2></strong>
            </div>
        </div>
        <br>
        <div>
            <div class="col-md-6">
                <strong><h2> Delivery details</h2></strong>
            </div>
        </div>
        <div class="ml-3">
            <div class="col-md-6">
                <p>
                <h3> Name: {{$orders->user_name}}</h3>
                <p>
                <h3> Phone: {{$orders->user_phone}}</h3>
                <p>
                <h3> Address: {{$orders->user_address}}</h3>
            </div>
        </div>
    </div>
@endsection