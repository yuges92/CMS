<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <header>

        <nav class="navbar navbar-expand-md top-nav-bar shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    {{-- <img src="https://www2.le.ac.uk/staff/announcements/yammer%20logo.png/image" --}}
                        {{-- src="https://www.logospng.com/images/21/getting-fit-at-home-with-yogaia-jacintaz3-21463.png" --}}
                        {{-- class="logo" alt=""> --}}

                    {{-- <i class="fab fa-hacker-news-square"></i> --}}
                    <span>{{config('app.name')}}</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    {{-- <div class="search-form">
                        <form class="">
                            <input class="form-control search-input" type="search" placeholder="Search"
                                aria-label="Search">
                        </form>
                    </div> --}}


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="/">
                            <i class="fas fa-search"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/blogs">
                                <i class="fas fa-blog"></i>
                                <span>{{ __('My Blogs') }}</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/yuges92" target="_blank">
                                <i class="fab fa-github"></i>
                                <span>{{ __('Github') }}</span>
                            </a>
                        </li>

                        <li class="nav-item">
                                <a class="nav-link" href="/programming">
                                    <i class="fas fa-code"></i>
                                    <span>{{ __('Programming') }}</span>
                                </a>
                            </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/about">
                                <i class="fas fa-info-circle"></i>
                                <span>{{ __('About') }}</span>
                            </a>
                        </li>

                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>
                                <span>{{ __('Login') }}</span></a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-circle"></i>
                                <span>{{ __('Register') }}</span>
                            </a>
                        </li>
                        @endif
                        @else


                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->firstname }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>

        <main class="">
            @yield('content')
        </main>

        <footer class="footer">
            Footer
        </footer>
    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>

</body>

</html>
