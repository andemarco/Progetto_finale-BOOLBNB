<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('storage/images/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('storage/images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('storage/images/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('storage/images/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('storage/images/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div>{{ config('app.name', '') }}</div>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app_search.js') }}" defer></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav>
            <div class="nav-left">
                <a class="" href="{{ url('/') }}">
                    <img class="main-logo" src="{{asset('storage/images/LogoCorretto.png')}}" alt="">
                </a>
            </div>
            <div class="nav-right">
                    <i id="ham-btn" class="fas fa-bars"></i>
                <ul class="auth-list">
                        <!-- Authentication Links -->
                        @guest
                                <li class="nav-item">
                                        <a class="text-danger ml-5" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                        <li class="nav-item">
                                                <a class="text-danger ml-5" href="{{ route('register') }}">{{ __('Registrati') }}</a>
                                        </li>
                                @endif
                        @else
                        <li class="nav-item dropdown-list-auth">
                                    <a id="auth-btn" class="text-danger" href="#">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                <div class="dropdown-menu-auth d-none">
                                        <a class="dropdown-effect" href="{{route('host.apartments.index')}}">
                                                I tuoi annunci
                                        </a>
                                        <a class="dropdown-effect" href="{{route('host.apartments.create')}}">
                                                Inserisci appartamento
                                        </a>
                                        <a class="dropdown-effect" href="{{ route('logout') }}"
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
                <ul class="auth-list-ham d-none">
                        <!-- Authentication Links -->
                        <li class="nav-item dropdown-list-auth-ham">
                        @guest
                        <div class="dropdown-menu-auth-ham d-none">

                                        <a class="dropdown-effect" href="{{ route('login') }}">{{ __('Login') }}</a>

                                @if (Route::has('register'))

                                                <a class="dropdown-effect" href="{{ route('register') }}">{{ __('Registrati') }}</a>
                                        </div>
                                @endif
                        @else

                                    {{-- <a id="auth-btn-ham" href="#">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a> --}}
                                <div class="dropdown-menu-auth-ham d-none">
                                        <a class="dropdown-effect" href="{{route('host.apartments.index')}}">
                                                I tuoi annunci
                                        </a>
                                        <a class="dropdown-effect" href="{{route('host.apartments.create')}}">
                                                Inserisci appartamento
                                        </a>
                                        <a class="dropdown-effect" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                            document.getElementById('logout-form-ham').submit();">
                                                {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form-ham" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                        </form>
                                </div>
                                @endguest
                        </li>
                </ul>
            </div>
        </nav>








        <main class="main-wrapper">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/app_navbar.js') }}"></script>

</body>
</html>
