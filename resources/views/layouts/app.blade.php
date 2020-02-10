<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.es.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">


    <style>
        .collapse { visibility: hidden;}
        .collapse.show {visibility: visible; display: block;}
        .collapsing {position: relative; height: 0; overflow: hidden;-webkit-transition-property: height, visibility; transition-property: height, visibility;-webkit-transition-duration: 0.01s; transition-duration: 0.01s;  -webkit-transition-timing-function: ease;  transition-timing-function: ease;}
        .collapsing.width {  -webkit-transition-property: width, visibility;  transition-property: width, visibility;  width: 0;  height: auto;}

        .borderless {
            border: none;
            margin-right: 12px;
        }

        .table th, .table td {
            vertical-align: middle;
        }

        a{
            color: black;
        }

        main {
            height: 100%;
        }

        @yield('css')
    </style>
</head>
<body>
    <div class="justify-content-between" id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow" style="background-color: #A9DFBF;">
            <div class="container">
                <a class="navbar-brand text-white" href="{{ url('/') }}">
                    <img src="images/logo1.png" alt="home" height="35" width="auto">
                </a>

                <button class="btn btn-toolbar text-white" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation" id="collapseBtn">
                    <span class="fas fa-bars"></span>
                </button>

                <div class="collapse navbar-collapse show" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container-fluid shadow-sm" style="margin-top: -15px">
            <div class="row">
                {{--<div class="col-12">
                    @if(Auth::check())
                        <div class="col-4 float-right">
                            @include('layouts.flash')
                        </div>
                    @else
                        <div class="col-4 float-right mt-4">
                            @include('layouts.flash')
                        </div>
                    @endif
                </div>--}}

                <div class="col-12">
                    {{--@if(Auth::check())--}}
                        <div class="row">

                            <div class="col-2 mt-0 p-0">
                                @include('layouts.sidebar')
                            </div>

                            <div id="contentBody" class="col-9 pt-4">
                                @yield('content')
                            </div>
                        </div>
                    {{--@else
                        <div class="pt-4">
                            @yield('content')
                        </div>
                    @endif--}}
                </div>
            </div>
        </main>
    </div>

@yield('js')
<script>
    $('#collapseBtn').on('click', function () {
        if ($('#sidebarCollapse').hasClass('show')){
            $('#contentBody').removeClass('col-9').addClass('col-12');
        }else {
            $('#contentBody').removeClass('col-12').addClass('col-9');
        }
    });
    if(! $('#sidebarCollapse').hasClass('show')){
        $('#contentBody').removeClass('col-9').addClass('col-12');
    }
</script>

<footer class="footer fixed-bottom" id="footer" style="background-color: white; margin-bottom: -15px">
    <p>&copy; Copyright 2020, Eliana Gimenez. All rights reserved</p>
</footer>
</body>
</html>
