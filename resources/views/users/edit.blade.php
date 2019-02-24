@extends('layouts.app')
@section('content')
    <div class="container">
    <form action="{{route('users.update', ['user' => $user->id])}}" method="POST" style="margin-left: 40px">
        @method('Patch')
        @include('users.partials.form')
        <button type="submit" class="btn btn-primary" style="margin-left: 15px">Edit</button>
    </form>
    </div>
@endsection