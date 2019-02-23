@extends('layouts.app')
@section('content')
    <div class="row ml-5">
        <h2>Orders</h2>
    </div>
    <div class="table">
        <table style="width: 60%;">
            <tr>
                <th>Items</th>
                <th>User name</th>
                <th>User phone</th>
                <th>Address delivery</th>
                <th>Order sum</th>
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
    <div class="row">
        <div class="col-md-6">
            <strong><h2> Total: {{$orders->sum}}$</h2></strong>
        </div>
    </div>
@endsection