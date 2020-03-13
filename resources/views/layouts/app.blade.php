<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/income.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <link href="https://unpkg.com/material-components-web@v4.0.0/dist/material-components-web.min.css" rel="stylesheet">
    <script src="https://unpkg.com/material-components-web@v4.0.0/dist/material-components-web.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/income.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <img src="../image/logo.png" alt="Logo" style="width: 90px; height: 90px; margin: 6% ">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                        @guest
                            <li class="nav-bar-inside-border-name nav-item button user_btn btn--future">
                                <a class="nav-link lrv-bar" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-bar-inside-border-name nav-item button user_btn btn--future">
                                    <a class="nav-link lrv-bar" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                            <li class="nav-item dropdown">
                                <a  id="navbarDropdownd" class="nav-bar-inside-border-name nav-link dropdown-toggle user_btn btn--future" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre    >
                                    <div class="nav-bar-name">{{ Auth::user()->name }}</div>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item lrv-bar" href="{{ route('profile') }}">
                                        <i class="fa fa-btn fa-user">
                                            {{ __('Profile') }}
                                        </i>
                                    </a>

                                    <a class="dropdown-item lrv-bar" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out">
                                            {{ __('Logout') }}
                                        </i>
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


        @yield('sidebar')
        <main class="py-4">
            <div  class="container">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')

                <button class="btn previous-button default_button">
                    <a class="white" href="{{route('/')}}">  Vorige pagina</a>
                </button>
            </div>
        </main>
    </div>
    @yield('footer')

</body>
</html>
