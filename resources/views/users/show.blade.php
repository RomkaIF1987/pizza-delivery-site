@extends('layouts.app')
@section('content')
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet"
          id="bootstrap-css">
    {{--<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>--}}
    {{--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>--}}
    <br><br>

    <div>
        <div class="row-fluid">
            <div class="span2">
                <img src="../storage/images/{{$user->logo}}"
                     class="img-circle" style="margin-top: 40px">
            </div>
            <div>
                <h3>{{$user->name}}</h3>
                <h6>Email: {{$user->email}}</h6>
                <h6>Phone: {{$user->phone}}</h6>
                <h6>City: {{$user->city}}</h6>
                <h6>Street: {{$user->street}}</h6>
                <h6>Home: {{$user->house}}</h6>
                <h6>Room: {{$user->room}}</h6>
            </div>
            <div class="span2">
                <div class="btn-group">
                    <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
                        Action
                        <span class="icon-cog icon-white"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('users.edit', ['user' => $user->id])}}"><span class="icon-wrench"></span>
                                Modify</a></li>
                        <li><a type="submit" href="javascript:void(0);" onclick="$(this).find('form').submit();"><span
                                        class="icon-trash"></span> Delete
                                <form action="{{route('users.destroy', ['user' => $user->id])}}"
                                      method="POST"
                                      style="display: inline">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="_method" value="DELETE">
                                </form>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection