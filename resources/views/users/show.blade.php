@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row m-5">
            <div class="col-md-6 img">
                <img src="../storage/images/{{$user->logo}}" alt="User logo" class="img-about">
            </div>
            <div class="col-md-6 details">
                <blockquote>
                    <h5>Name: {{$user->name}}</h5>
                    <small><cite title="Source Title">{{$user->city}}, {{$user->street}}, {{$user->house}}, {{$user->room}}  <i class="icon-map-marker"></i></cite>
                    </small>
                </blockquote>
                <p>
                   Email: {{$user->email}} <br>
                    Phone: {{$user->phone}} <br>
                </p>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
                        Action
                        <span class="icon-cog icon-white"></span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{route('users.edit', ['user' => $user->id])}}"><span
                                    class="icon-wrench"></span>
                            Modify</a>
                        <a class="dropdown-item" type="submit" href="javascript:void(0);"
                           onclick="$(this).find('form').submit();"><span
                                    class="icon-trash"></span> Delete
                            <form action="{{route('users.destroy', ['user' => $user->id])}}"
                                  method="POST"
                                  style="display: inline">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="_method" value="DELETE">
                            </form>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
