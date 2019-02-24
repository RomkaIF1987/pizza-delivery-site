@extends('layouts.app')
@section('content')
    <h2>Add new pizza</h2>
    <form action="{{route('pizza.store')}}" method="POST" enctype='multipart/form-data' style="margin-left: 40px">
        @include('pizza.partials.form')
        <button type="submit" class="btn btn-primary" style="margin-left: 15px">Add new pizza</button>
    </form>
@endsection