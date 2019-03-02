@extends('layouts.app')
@section('content')
    <h2>Add new photo</h2>
    <form action="{{route('galleries.store')}}" method="POST" enctype='multipart/form-data' style="margin-left: 40px">
        @include('gallery.partials.form')
        <button type="submit" class="btn btn-primary" style="margin-left: 15px">Add new photo</button>
    </form>
@endsection
