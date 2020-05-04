<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                    {{ config('app.name', 'Boolbnb') }}
                    <img class="main-logo" src="{{asset('storage/images/LogoCorretto.png')}}" alt="">
                </a>
            </div>
            <div class="nav-right">
                <button id="ham-btn" type="button">
                    <i class="fas fa-bars"></i>
                </button>
                <ul class="auth-list">
                        <!-- Authentication Links -->
                        @guest
                                <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                        <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrati') }}</a>
                                        </li>
                                @endif
                        @else
                        <li class="nav-item dropdown-list-auth">
                                    <a id="auth-btn" href="#">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                <div class="dropdown-menu-auth d-none">
                                        <a class="dropdown-item" href="{{route('host.apartments.index')}}">
                                                I tuoi annunci
                                        </a>
                                        <a class="dropdown-item" href="{{route('host.apartments.create')}}">
                                                Inserisci appartamento
                                        </a>
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
                <ul class="auth-list-ham d-none">
                        <!-- Authentication Links -->
                        <li class="nav-item dropdown-list-auth-ham">
                        @guest
                        <div class="dropdown-menu-auth-ham d-none">
                                
                                        <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                                
                                @if (Route::has('register'))
                                        
                                                <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </div>
                                @endif
                        @else
                        
                                    {{-- <a id="auth-btn-ham" href="#">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a> --}}
                                <div class="dropdown-menu-auth-ham d-none">
                                        <a class="dropdown-item" href="{{route('host.apartments.index')}}">
                                                I tuoi annunci
                                        </a>
                                        <a class="dropdown-item" href="{{route('host.apartments.create')}}">
                                                Inserisci appartamento
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
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
