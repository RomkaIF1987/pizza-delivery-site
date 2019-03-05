@extends('layouts.app')
@section('content')
    <title>Admin Panel</title>

    <link href="../fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../css/sb-admin.css" rel="stylesheet">

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('adminPanelIndex')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('adminPanelCharts')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>
        </ul>

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Icon Cards-->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white o-hidden h-100">
                            <a href="{{route('menu-items.create')}}" class="btn btn-primary m-1"> Add new item in
                                menu</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white o-hidden h-100">
                            <a href="{{route('users.create')}}" class="btn btn-primary m-1"> Add user</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white o-hidden h-100">
                            <a href="{{route('galleries.create')}}" class="btn btn-primary m-1"> Add photo</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white o-hidden h-100">
                            <a href="{{route('blogs.create')}}" class="btn btn-primary m-1"> Add new blog</a>
                        </div>
                    </div>
                </div>


                <div class="text-center" style="color: whitesmoke"><h3>Tables</h3></div>
                <!-- DataTables Example -->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        Users Table
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @include('users.partials.users_table')
                        </div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        Orders Table
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @include('manager.partials.orders_table')
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        Menu Items Table
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @include('menuItem.partials.menu_items_table')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection