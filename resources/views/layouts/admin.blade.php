<?php 

use App\Entity\NotifiableNotification;

$notifications = NotifiableNotification::where('seen' , "=" , 0)->get();
//dump($notifications);die();
?>
<!doctype html>
<html lang="en">

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Admin dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />

    <link rel="shortcut icon" href="favicon/favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Bamburgh Z Admin Dashboard PRO Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('admin/css/bamburgh.min.css') }}">
    

</head>
<body id="app-top">

<div class="app-wrapper">
    <div class="app-sidebar  app-sidebar--dark ">
    <div class="app-sidebar--header">
        <div class="nav-logo w-100 text-center">
            
        </div>
        <button class="toggle-sidebar rounded-circle btn btn-sm bg-white shadow-sm-dark text-primary" data-toggle="tooltip" data-placement="right" title="Expand sidebar" type="button">
            <i class="fas fa-arrows-alt-h"></i>
        </button>
    </div>
    <div class="app-sidebar--content scrollbar-container">
        <div class="sidebar-navigation">
    <ul id="sidebar-nav">
        

        <li class="sidebar-header">
            Components
        </li>

        <li>
        <a href="{{route('user.index')}}" aria-expanded="false">
            <span>
                <i data-feather="globe"></i>
                <span>Users</span>
            </span>
            
        </a>

        </li>

        <li>
        <a href="{{route('category.index')}}" aria-expanded="false">
            <span>
                <i data-feather="globe"></i>
                <span>Categorys</span>
            </span>
            
        </a>

        </li>

        <li>
        <a href="{{route('message.index')}}" aria-expanded="false">
            <span>
                <i data-feather="globe"></i>
                <span>Messages</span>
            </span>           
        </a>

        </li>

        <li>
        <a href="{{route('post.index')}}" aria-expanded="false">
            <span>
                <i data-feather="globe"></i>
                <span>Posts</span>
            </span>
            
        </a>

        </li>


    </ul>
</div>

    </div>
   
</div>
<div class="sidebar-mobile-overlay"></div>

    <div class="app-main">
        <div class="app-header">
    <div class="d-flex">
        <button class="navbar-toggler hamburger hamburger--elastic toggle-sidebar" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
        <button class="navbar-toggler hamburger hamburger--elastic toggle-sidebar-mobile" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
        <div class="search-link">
            <div class="d-none d-lg-flex">
                <i class="fas search-icon fa-search"></i>
                <input type="text" placeholder="Click here to search...">
            </div>
            <div class="d-none d-sm-flex d-lg-none">
                <button class="btn btn-outline-primary btn-sm px-3" type="button" data-toggle="modal" data-target="#search-modal">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="d-flex align-items-center">
        <!-- <span data-toggle="tooltip" title="You have <b>{{$notifications->count()}}</b> new notifications" data-tooltip-class="tooltip-success" data-trigger="hover" data-html="true" data-placement="bottom">
            <button type="button" class="btn bg-neutral-success text-success font-size-lg mr-2 p-0 d-inline-block shadow-none text-center d-44 rounded position-relative" data-toggle="modal" data-target="#modal-notifications">
                <span class="badge badge-circle badge-success">New notifications</span>
                <i class="far fa-bell"></i>
            </button>
        </span> -->
        <!-- <button class="btn bg-neutral-danger text-danger font-size-lg mr-2 p-0 d-inline-block shadow-none text-center d-44 rounded popover-custom position-relative" type="button" data-trigger="click" data-placement="auto" data-popover-class="popover-secondary popover-custom-wrapper popover-custom-lg" data-rel="popover-close-outside" data-tip="settings-popover">
            <span class="badge badge-circle badge-danger badge-header-alt">New notifications</span>
            <i class="far fa-comment"></i>
        </button> -->
        
        <div class="user-box ml-2">
            <a href="#" data-trigger="click" data-popover-class="popover-secondary popover-custom-wrapper popover-custom-lg" data-rel="popover-close-outside" data-tip="account-popover" class="p-0 d-flex align-items-center popover-custom" data-placement="bottom" data-boundary="'viewport'">
                <div class="d-block p-0 avatar-icon-wrapper">
                    <span class="badge badge-circle badge-success p-top-a">Online</span>
                    <div class="avatar-icon rounded">
                        <img src="{{ URL::asset('admin/img/avatars/avatar7.jpg')}}" alt="">
                    </div>
                </div>
                <div class="d-none d-md-block pl-2">
                    <div class="font-weight-bold">
                        {{Auth::user()->name}}
                    </div>
                    <span class="text-black-50">
                        @if(Auth::user()->role == 0)
                        Admin
                        @else
                        Client
                        @endif
                    </span>
                </div>
                <span class="pl-3"><i class="fas fa-angle-down opacity-5"></i></span>
            </a>
        </div>
       <!--  <div id="settings-popover" class="d-none">
            <ul class="list-group list-group-flush text-left bg-transparent">
                <li class="list-group-item rounded-top">
                    <ul class="nav nav-pills nav-pills-hover flex-column">
                        @foreach($notifications as $notification)
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('post.edit', $notification->notification->link)}}">
                                {{$notification->notification->message}}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div> -->
        <div id="account-popover" class="d-none">
            <ul class="list-group list-group-flush text-left bg-transparent">
                <li class="list-group-item rounded-top">
                    <ul class="nav nav-pills nav-pills-hover flex-column">
                        <li class="nav-header d-flex text-primary pt-1 pb-2 font-weight-bold align-items-center">
                            <div>
                                Profile options
                            </div>
                            <div class="ml-auto font-size-xs">
                                <a href="#" data-toggle="tooltip" title="Add new channel">
                                    <i class="fas fa-plus-circle"></i>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('user.edit', Auth::user()->id)}}">
                                My Account
                            </a>
                        </li>
                       
                        <li class="nav-item">
                            
                             <li>
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form-x').submit();">
                                    Logout
                                </a>

                                <form id="logout-form-x" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    
    </div>
</div>

<!-- Bamburgh Z Admin Dashboard PRO Javascript Core -->

@yield('container')


</body>

<script src="{{ URL::asset('admin/jquery/jquery-3.3.1.slim.min.js') }}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="{{ URL::asset('admin/ajax/libs/popper.js/1.14.7/umd/popper.min.js') }}" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="{{ URL::asset('admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

<!--Bootstrap init-->

<script src="{{ URL::asset('admin/js/demo/bootstrap/bootstrap.min.js') }}"></script>

<!--MetisMenu-->

<script src="{{ URL::asset('admin/vendor/metismenu/js/metismenu.min.js') }}"></script>

<!--MetisMenu init-->

<script src="{{ URL::asset('admin/js/demo/metismenu/metismenu.min.js') }}"></script>

<!--Perfect scrollbar-->

<script src="{{ URL::asset('admin/vendor/perfect-scrollbar/js/perfect-scrollbar.min.js') }}"></script>

<!--Perfect scrollbar init-->

<script src="{{ URL::asset('admin/js/demo/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

<!--FeatherIcons-->

<script src="{{ URL::asset('admin/vendor/feather-icons/js/feather-icons.min.js') }}"></script>

<!--FeatherIcons init-->

<script src="{{ URL::asset('admin/js/demo/feather-icons/feather-icons.min.js') }}"></script>

<!--Layout-->

<script src="{{ URL::asset('admin/js/bamburgh.min.js') }}"></script>



<!--Apexcharts-->

<script src="{{ URL::asset('admin/vendor/apexcharts/js/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('admin/js/demo/apexcharts/sparklines.min.js') }}"></script>
<script src="{{ URL::asset('admin/js/demo/apexcharts/bar-chart.min.js') }}"></script>

<!--Slick slideshow-->

<script src="{{ URL::asset('admin/vendor/slick/js/slick.min.js') }}"></script>

<!--Slick slideshow init-->

<script src="{{ URL::asset('admin/js/demo/slick/slick.min.js') }}"></script>

<!--DataTables-->

<link rel="stylesheet" type="text/css" href="{{ URL::asset('admin/cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('admin/cdn.datatables.net/buttons/1.5.6/css/buttons.bootstrap4.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('admin/cdn.datatables.net/fixedheader/3.1.4/css/fixedHeader.bootstrap4.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('admin/cdn.datatables.net/keytable/2.5.0/css/keyTable.bootstrap4.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('admin/cdn.datatables.net/responsive/2.2.2/css/responsive.bootstrap4.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('admin/cdn.datatables.net/scroller/2.0.0/css/scroller.bootstrap4.min.css') }}"/>

<script src="{{ URL::asset('admin/cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('admin/cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('admin/cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('admin/cdn.datatables.net/buttons/1.5.6/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('admin/cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js') }}"></script>
<script src="{{ URL::asset('admin/cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js') }}"></script>
<script src="{{ URL::asset('admin/cdn.datatables.net/keytable/2.5.0/js/dataTables.keyTable.min.js') }}"></script>
<script src="{{ URL::asset('admin/cdn.datatables.net/responsive/2.2.2/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('admin/cdn.datatables.net/responsive/2.2.2/js/responsive.bootstrap4.min.js') }}"></script>

<!--Datatables init-->
<script src="{{ URL::asset('admin/js/demo/datatables/datatables.min.js') }}"></script>

</html>
