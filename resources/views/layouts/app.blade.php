<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{--{{ config('app.name') }}--}}Tools Center</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Passion+One:900" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="shortcut icon" href="https://www.bax-shop.co.uk/img/logo/logo.svg" type="image/x-icon">

    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
<style>


    .collapsible {

        color: black;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
    }
    .active,
    .collapsible:hover {
        background-color: #f8fafc;
    }
    .content {
        padding: 0 18px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
        background-color: #f8fafc;
    }

    * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    body {
        padding: 0;
        margin: 0;
    }

    #notfound {
        position: relative;
        height: 100vh;
    }

    #notfound .notfound {
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .notfound {
        max-width: 710px;
        width: 100%;
        padding-left: 190px;
        line-height: 1.4;
    }

    .notfound .notfound-404 {
        position: absolute;
        left: 0;
        top: 0;
        width: 150px;
        height: 150px;
    }

    .notfound .notfound-404 h1 {
        font-family: 'Passion One', cursive;
        color: #00b5c3;
        font-size: 150px;
        letter-spacing: 15.5px;
        margin: 0px;
        font-weight: 900;
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .notfound h2 {
        font-family: 'Raleway', sans-serif;
        color: #292929;
        font-size: 28px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2.5px;
        margin-top: 0;
    }

    .notfound p {
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        font-weight: 400;
        margin-top: 0;
        margin-bottom: 15px;
        color: #333;
    }

    .notfound a {
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        text-decoration: none;
        text-transform: uppercase;
        background: #fff;
        display: inline-block;
        padding: 15px 30px;
        border-radius: 40px;
        color: #292929;
        font-weight: 700;
        -webkit-box-shadow: 0px 4px 15px -5px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 4px 15px -5px rgba(0, 0, 0, 0.3);
        -webkit-transition: 0.2s all;
        transition: 0.2s all;
    }

    .notfound a:hover {
        color: #fff;
        background-color: #00b5c3;
    }

    @media only screen and (max-width: 480px) {
        .notfound {
            text-align: center;
        }
        .notfound .notfound-404 {
            position: relative;
            width: 100%;
            margin-bottom: 15px;
        }
        .notfound {
            padding-left: 15px;
            padding-right: 15px;
        }
    }


    .rating{
        width: 210px;
    }
    .rating >*{
        float: right;
    }
    .rating label{
        height: 40px;
        width: 20%;
        display: block;
        position: relative;
        cursor: pointer;
    }
    .rating label::after{
        transition: all 0.4s ease-out;
        -webkit-font-smoothing: antialiased;
        position: absolute;
        content: "☆";
        color: #444;
        top: 0;
        left: 0;
        width: 50%;
        text-align: center;
        font-size: 50px;
        -webkit-animation: 1s pulse ease;
        animation: 1s pulse ease;
    }
    .rating label:hover::after{
        color: #5e5e5e;
        text-shadow: 0 0 15px #5e5e5e;
    }
    .rating input{
        display: none;
    }
    .rating input:checked + label::after,
    .rating input:checked ~ label::after{
        content: "★";
        color: #f9bf3b;
        text-shadow: 0 0 20px #f9bf3b;

    }
</style>


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <img src="https://www.bax-shop.co.uk/img/logo/logo.svg" style="width: 56px; height: 56px">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{--{{ config('app.name', 'Laravel') }}--}} Tools Center
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->


                    <ul class="navbar-nav me-auto">

                        @isset($categories)
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('items.index')}}">{{__('bet.homepage')}}</a>
                        </li>
                        @endisset
                            <li class="nav-item">

                                    <a class="nav-link"   href="{{ url('/items/create') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                        </svg>
                                        <label>{{__('bet.addpage')}}</label>
                                    </a>

                            </li>

                        <form class="form-inline align-items-center text-center d-flex my-2 my-lg-0" method="GET" action="{{route('items.search')}}" style="margin-left: 200px">
                            <input class="form-control mr-sm-2" name="Search" placeholder="{{ __('bet.search') }}.." aria-label="Search">
                            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">{{__('bet.search')}}</button>
                        </form>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a style="padding-top: 17px;margin-right: 7px" class="nav-link" href="{{route('shoping.index')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                                </svg>
                                @isset($kol)
                                    <span style="color: red">({{$kol}})</span>
                                @endisset
                            </a>
                        </li>

                        @guest
                            @if (Route::has('login.form'))
                                <li class="nav-item">
                                    <a style="padding-top: 16px" class="nav-link" href="{{ route('login.form') }}">{{ __('bet.login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register.form'))
                                <li class="nav-item">
                                    <a class="nav-link" style="padding-top: 16px" href="{{ route('register.form') }}">{{ __('bet.register') }}</a>
                                </li>
                            @endif
                        @else
                            @if(Auth::user()->role_id == 2)
                            <li class="nav-item">
                                <a style="margin-top: 10px;margin-right: 3px" href="{{url('/adm/categories/index')}}" class="btn btn-outline-success">{{__('bet.admpnl')}}</a>
                            </li>
                            @elseif(Auth::user()->role_id == 3)
                                <li class="nav-item">
                                    <a style="margin-top: 10px;margin-right: 3px" href="{{url('/adm/users')}}" class="btn btn-outline-success">{{__('bet.admpnl')}}</a>
                                </li>
                            @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" style="padding-bottom: 0px;padding-right: 0px;padding-left: 17px" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('bet.logout') }}
                                        <svg xmlns="http://www.w3.org/2000/svg" style="padding-bottom: 2px" width="20" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                        </svg>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                <label class="fw-bold" style="padding-right: 10px; padding-left: 10px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                                        <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                                    </svg>
                                    {{Auth::user()->balance}} ₸
                                </label>

                                <li class="nav-item">
                                    <a href="{{url('items/profile')}}">
                                    <img src="{{Auth::user()->avatar}}" style="width: 37px; border-radius: 50%; padding-top: 5px">
                                    </a>
                                </li>


                            </li>
                        @endguest

                        <li class="nav-item dropdown">
                            <a style="padding-top: 17px" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                                    <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z"/>
                                </svg>
                                {{ app()->getLocale() }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                @foreach(config('app.languages') as $ln => $lang)
                                <a class="dropdown-item" href="{{route('switch.lang', $ln)}}">
                                    {{$lang}}
                                </a>
                                @endforeach
                                <a class="dropdown-item" href="{{url('/items/lang')}}">
                                    ...
                                </a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        @if(session('message'))
            <div class="alert hide" style="margin-left: 1590px;margin-right: 10px; background-color: #c5f3d7; margin-top: 5px">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
                </svg>
                <span class="msg">{{session('message')}}
                    @if(session('message') == __('error.balance'))
                        <hr>
                        <h6>{{__('bet.balance')}}:
                        {{Auth::user()->balance}} ₸
                        </h6>
                    @endif
                </span>
            </div>
        @endif


        <div class="container d-flex" style="margin-top: 10px">
            <div class="list-group">

                @isset($categories)

                    <a class="list-group-item list-group-item-action"><label class="display-6">{{__('bet.category')}}</label></a>

                    @foreach($categories as $cat)

                        <a class="list-group-item list-group-item-action" style="padding-right: 60px;margin-top: 3px" href="{{route('items.category', $cat->id)}}"><li>{{$cat->{'name_'.app()->getLocale()} }}</li></a>

                    @endforeach
                @endisset
            </div>




{{--        @if($errors->any())--}}
{{--            <div class="alert alert-danger">--}}
{{--                <ul>--}}
{{--                    @foreach($errors->all() as $error)--}}
{{--                        <li>{{$error}}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}

{{--            </div>--}}
{{--        @endif--}}
            <div class="container" style="margin-left: -10px">
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>

    <footer class="text-center text-lg-start bg-white text-muted">
        <div class="text-center p-4 "    >
            &copy; 2022 Copyright By <label class="fw-bold">Akimov Yeskendir</label>
        </div>
    </footer>



</body>
</html>
