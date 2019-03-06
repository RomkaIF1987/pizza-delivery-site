@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('blogs.update', ['blog' => $blog->id])}}" method="POST" style="margin-left: 40px">
            @method('Patch')
            @include('blog.partials.form')
            <button type="submit" class="btn btn-primary" style="margin-left: 15px">Edit</button>
        </form>
    </div>
@endsection