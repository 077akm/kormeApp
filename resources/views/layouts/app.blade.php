<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{--{{ config('app.name') }}--}}Tools Center</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
<style>
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
                            <a class="nav-link" href="{{route('items.index')}}">Главная</a>
                        </li>
                        @endisset
                            <li class="nav-item">

                                    <a class="nav-link"   href="{{ url('/items/create') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                        </svg>
                                        <label>Продукты</label>
                                    </a>

                            </li>

                        <form class="form-inline align-items-center text-center d-flex my-2 my-lg-0" method="GET" action="{{route('items.search')}}" style="margin-left: 200px">
                            <input class="form-control mr-sm-2" name="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
                        </form>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('shoping.index')}}">
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
                                    <a class="nav-link" href="{{ route('login.form') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register.form'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register.form') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @if(session('message'))
            <div class="alert alert-success" role="alert">
                {{session('message')}}
            </div>
        @endif
        <div class="container d-flex" style="margin-top: 15px">
            <div class="list-group">

                @isset($categories)

                    <a class="list-group-item list-group-item-action"><label class="display-6">Categories</label></a>

                    @foreach($categories as $cat)

                        <a class="list-group-item list-group-item-action" style="padding-right: 60px;margin-top: 3px" href="{{route('items.category', $cat->id)}}"><li>{{$cat->name}}</li></a>

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
        <div class="text-center p-4"    >
            &copy; 2022 Copyright
        </div>
    </footer>



</body>
</html>
