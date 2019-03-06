@extends('layouts.app')
@section('content')
    <div class="comment-form-wrap pt-5">
    <h3 class="m-2 pl-5">Add post</h3>
    <form action="{{route('blogs.store')}}" method="POST" enctype='multipart/form-data' style="margin-left: 40px">
        @include('blog.partials.form')
        <button type="submit" class="btn btn-primary m-4" style="margin-left: 15px">Add new post</button>
    </form>
    </div>
@endsection