@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('menu-items.update', ['menuItem' => $menuItem->id])}}" method="POST" style="margin-left: 40px">
            @method('Patch')
            @include('menuItem.partials.form')
            <button type="submit" class="btn btn-primary" style="margin-left: 15px">Edit</button>
        </form>
    </div>
@endsection