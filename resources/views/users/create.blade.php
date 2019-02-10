@extends('layouts.app')
@section('content')
    <form action="{{route('users.store')}}" method="POST" style="margin-left: 40px">
        @include('users.partials.form')
        <button type="submit" class="btn py-3 px-4 btn-primary m-5" style="margin-left: 15px">Register</button>
    </form>
@endsection