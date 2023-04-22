<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>League Sense</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
                <!-- NAVBAR -->
                <ul class="navbar navbar-expand-md border-bottom sticky-top bg-white">
            <div class="container-sm-fluid container-md d-flex">
                <li class="nav-item col-4 mt-2"><a href="{{ route('home.index') }}" class="h1 nav-link gradient-text ps-md-3">League Sense</a></li>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="collapse navbar-collapse d-flex me-5 pe-5" id="navbarSupportedContent">
                        <div class="navbar-nav nav-tabs d-flex bang mt-2 me-5 pe-5">
                        <li class="nav nav-item"><a class="nav-link rounded-4" href="{{route('admin.fixtures.index')}}"><p>Fixtures</p></a></li>
                            <li class="nav nav-item"><a class="nav-link rounded-4" href="{{route('admin.players.create')}}"><p>Create Players</p></a></li>
                            <li class="nav nav-item"><a class="nav-link rounded-4" href="{{route('admin.teams.create')}}"><p>Create Teams</p></a></li>
                            <li class="nav nav-item"><a class="nav-link rounded-4" href="{{route('admin.fixtures.create')}}"><p>Create Fixtures</p></a></li>
                        </div>
                    </ul>
                    <ul class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarSupportedContent">
                        <div class="navbar-nav nav-tabs d-flex flex-row-reverse bang mt-2">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
                            
                        </div>
                    </ul>
            </div>
    </ul>
        <!-- NAVBAR END -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
