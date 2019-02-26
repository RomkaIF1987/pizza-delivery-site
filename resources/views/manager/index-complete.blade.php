@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="text-center card-header">
            <h2>Complete Orders</h2>
            <a href="{{route('manager.index')}}" class="btn btn-primary">Incomplete orders</a>
        </div>
        <div class="col-md-12 d-flex">
            <div class="card-body">
        @include('manager.partials.orders_table')
            </div>
        </div>
    </div>
@endsection
