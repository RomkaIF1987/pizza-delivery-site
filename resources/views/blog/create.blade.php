@extends('layouts.app')
@section('content')
    <h2>Add menu blog</h2>
    <form action="{{route('blogs.store')}}" method="POST" enctype='multipart/form-data' style="margin-left: 40px">
        @include('blog.partials.form')
        <button type="submit" class="btn btn-primary" style="margin-left: 15px">Add new blog</button>
    </form>
@endsection