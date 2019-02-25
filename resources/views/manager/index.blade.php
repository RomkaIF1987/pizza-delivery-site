@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="text-center card-header">
            <h2>Orders</h2>
            <a href="{{route('manager.complete')}}" class="btn btn-primary">Complete orders</a>
        </div>
        @include('manager.partials.orders_table')
    </div>
@endsection
