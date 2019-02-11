@extends('layouts.app')
@section('content')

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <div class="container">
        <div class="row">
            <div class="col-md-7 ">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>User Profile</h4></div>
                    <div class="panel-body">
                        <div class="box box-info">
                            <div class="box-body">
                                <div class="col-sm-6">
                                    <div align="center"><img alt="User Pic"
                                                             src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg"
                                                             id="profile-image1" class="img-circle img-responsive">
                                        <input id="profile-image-upload" class="hidden" type="file">
                                        <div style="color:#999;"></div>
                                    </div>
                                    <br>
                                    <!-- /input-group -->
                                </div>
                                <div class="col-sm-6">
                                    <h4 style="color:#00b1b1;">{{$user->name}} </h4></span>
                                    <span><p>{{$user->role}}</p></span>
                                </div>
                                <div class="clearfix"></div>
                                <hr style="margin:5px 0 5px 0;">


                                <div class="col-sm-5 col-xs-6 tital ">Email:</div>
                                <div class="col-sm-7 col-xs-6 ">{{$user->email}}</div>
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital ">Phone:</div>
                                <div class="col-sm-7">{{$user->phone}}</div>
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital ">City:</div>
                                <div class="col-sm-7">{{$user->city}}</div>
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital ">Street:</div>
                                <div class="col-sm-7">{{$user->street}}</div>

                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital ">House:</div>
                                <div class="col-sm-7">{{$user->house}}</div>

                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital ">Room:</div>
                                <div class="col-sm-7">{{$user->room}}</div>

                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="span2">
                <div class="btn-group">
                    <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
                        Action
                        <span class="icon-cog icon-white"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('users.edit', ['user' => $user->id])}}"><span
                                        class="icon-wrench"></span>
                                Modify</a></li>
                        <li><a class="dropdown-item" type="submit" href="javascript:void(0);"
                               onclick="$(this).find('form').submit();"><span
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
@endsection