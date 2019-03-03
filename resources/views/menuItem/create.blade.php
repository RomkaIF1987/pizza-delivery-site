@extends('layouts.app')
@section('content')
    <h2>Add menu item</h2>
    <form action="{{route('menu-items.store')}}" method="POST" enctype='multipart/form-data' style="margin-left: 40px">
        @include('menuItem.partials.form')
        <button type="submit" class="btn btn-primary" style="margin-left: 15px">Add new menu item</button>
    </form>
@endsection
