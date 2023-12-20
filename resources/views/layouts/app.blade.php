<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="https://i.pinimg.com/736x/0d/cf/b5/0dcfb548989afdf22afff75e2a46a508.jpg"  type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/styll.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Passion+One:900" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="shortcut icon" href="https://i.pinimg.com/736x/0d/cf/b5/0dcfb548989afdf22afff75e2a46a508.jpg"  type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/styll.css')}}">

    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Korme Portfolio Website </title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

<nav>
    <a class="logo" href="{{ url('/') }}"><img src="https://i.pinimg.com/736x/0d/cf/b5/0dcfb548989afdf22afff75e2a46a508.jpg"></a>
    <a href="{{ url('/') }}" class="active">Home</a>
    <a href="#">Explore</a>
    <a href="{{ url('/items/create') }}">Create</a>

    <form method="GET" action="{{ route('items.search') }}" onsubmit="return submitForm();">
        <input type="text" class="search" name="Search" placeholder="{{ __('bet.search') }}" onkeydown="return handleEnter(event)" style="width: 1250px">
    </form>
    <a class="icon d-flex" href="{{route('shoping.index')}}" style="padding-right: 0px">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
        </svg>
        @isset($kol)
            <span style="color: red">({{$kol}})</span>
        @endisset
    </a>

    @guest
        @if (Route::has('login.form'))

            <a href="{{ route('login.form') }}" class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
            </a>
        @endif

        {{--@if (Route::has('register.form'))
            <li class="nav-item">
                <a class="nav-link" style="padding-top: 16px" href="{{ route('register.form') }}">{{ __('bet.register') }}</a>
            </li>
        @endif--}}
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
            <a href="#" class="icon"><i class="fas fa-bell"></i></a>
            {{--<a href="#" class="icon"><i class="fas fa-comment-dots"></i></a>--}}


                <a id="navbarDropdown" class="icon" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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


            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="{{url('items/profile')}}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><img src="{{Auth::user()->avatar}}" alt="" ></a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{url('items/profile')}}">
                    <div class="d-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                        </svg>
                        <div style="margin-left: 20px">
                            <h6 class="fw-bold">{{Auth::user()->name}}</h6>
                            <p style="margin-bottom: -5px; color: #9c9ea8">Account</p>
                            <p style="color: #9c9ea8">{{Auth::user()->email}}</p>
                        </div>
                    </div>
                </a>
                <hr>
                <label class="fw-bold" style="padding-right: 10px; padding-left: 10px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                        <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                    </svg>
                    {{Auth::user()->balance}} ₸
                </label>
                <hr>
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
    @endguest




</nav>
{{--@if(session('message'))
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
@endif--}}

<div class="container-fluid">
    <main class="py-4">
        @yield('content')
    </main>
</div>
{{--<div id="loader"></div>
<div id="container">
    <div class="col"></div>
    <div class="col"></div>
    <div class="col"></div>
    <div class="col"></div>
    <div class="col"></div>
</div>

<script>
    let page = 1;
    let fetching = false;
    const container = document.getElementById('container');
    const cols = Array.from(container.getElementsByClassName('col'));
    console.log(cols)

    const fetchImageData = async () => {
        try {
            fetching = true;
            document.getElementById('loader').style.display = 'block';
            const response = await fetch(`https://dog.ceo/api/breeds/image/random/30`);
            const data = await response.json();
            fetching = false;
            return data.message;
        } catch (error) {
            console.error("Error fetching data:", error);
            fetching = false;
            throw error;
        }
    };

    fetchImageData().then((images) => {
        if (images.length > 0) {
            images.forEach((image, index) => {
                createCard(image, cols[index % cols.length]);

                console.log(index % cols.length)
            });
        }
    }).catch((error) => {
        console.error("Error initial fetch:", error);
    });

    const createCard = (image, col) => {
        const card = document.createElement('div');
        card.classList.add('card');
        const img = document.createElement('img');
        img.src = image;
        img.alt = "Random Image";
        img.style.width = "100%";
        img.onerror = function () {
            this.parentElement.style.display = "none";
        };
        img.onload = function () {
            document.getElementById('loader').style.display = 'none';
        };
        card.appendChild(img);
        col.appendChild(card);
    };


    const handleScroll = () => {
        if (fetching) return;

        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const windowHeight = window.innerHeight;
        const bodyHeight = document.documentElement.scrollHeight;

        if (bodyHeight - scrollTop - windowHeight < 800) {
            page++;
            fetchImageData().then((images) => {
                if (images.length > 0) {
                    images.forEach((image, index) => {
                        createCard(image, cols[index % cols.length]);
                    });
                }
            }).catch((error) => {
                console.error("Error handling scroll:", error);
            });
        }
    };

    window.addEventListener('scroll', handleScroll);
</script>--}}

<footer class="text-center text-lg-start bg-white text-muted">
    <div class="text-center p-4 "    >
        &copy; 2023 Copyright By <label class="fw-bold">Yeskendira</label>
    </div>
</footer>

<script>
    function handleEnter(event) {
        if (event.keyCode === 13) {
            submitForm();
            return false;
        }
        return true;
    }

    function submitForm() {
        // Добавьте здесь необходимую логику, например, валидацию перед отправкой формы
        document.forms[0].submit();
        return false;
    }
</script>

</body>

</html>



