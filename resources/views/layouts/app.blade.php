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
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="spinner-container">

        <div class="loader"></div>
    </div>

    <div id="app" style="display:none;">
        <header class="header">
            <nav class="navbar">
                <div>

                    <a class="navbar-brand" href="/">
                        <img src="{{asset('images/logo.png')}}" alt="">
                    </a>
                </div>

                <div class="menu-container">
                    <div>

                        <button class="navbar-toggler" type="button" @click="showNav" v-show="!showNavBar">
                            <i class="fas fa-bars"></i>
                        </button>


                        {{-- <div class="search-form">
                            <form class="">
                                <input class="form-control search-input" type="search" placeholder="Search"
                                aria-label="Search">
                            </form>
                        </div> --}}
                    </div>


                    <!-- Right Side Of Navbar -->
                    <div class="navbar-nav-container" :class="{active:showNavBar }">

                        <ul class="nav-items">
                            <div class="toggler-wrapper">
                                <button class="navbar-toggler" type="button" @click="closeNav">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>

                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fas fa-search"></i>
                                </a>
                            </li>



                            <li class="nav-item">
                                <a class="nav-link" href="/blogs">
                                    <i class="fas fa-blog"></i>
                                    <span> {{ __('My Blogs') }}</span>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="/programming">
                                    <i class="fas fa-code"></i>
                                    <span> {{ __('Programming') }}</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/portfolios">
                                    <i class="fas fa-images"></i>
                                    <span> {{ __('Portfolios') }}</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="https://github.com/yuges92" target="_blank">
                                    <i class="fab fa-github"></i>
                                    <span> {{ __('Github') }}</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">
                                    <i class="fas fa-info-circle"></i>
                                    <span> {{ __('About') }}</span>
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

                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin') }}"><i class="fas fa-user"></i>
                                        <span>{{ Auth::user()->firstname }}</span></a>
                                </li>

                                <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i>
                                            <span>Logout</span></a>
                                    </li>
                            @endguest
                        </ul>
                        <ul class="social-networks">
                            <li class="nav-item"><a class="link" href=""><i class="fab fa-instagram"></i></a></li>
                            <li class="nav-item"><a class="link" href=""><i class="fab fa-twitter"></i></a></li>
                            <li class="nav-item"><a class="link" href=""><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="nav-item"><a class="link" href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li class="nav-item"><a class="link" href=""><i class="fab fa-pinterest"></i></a></li>
                        </ul>

                    </div>
                </div>
            </nav>
        </header>

        <main class="main">
            @yield('content')
        </main>

        <footer class="footer">

            <ul class="social-networks">
                <li class="nav-item"><a class="link" href=""><i class="fab fa-instagram"></i></a></li>
                <li class="nav-item"><a class="link" href=""><i class="fab fa-twitter"></i></a></li>
                <li class="nav-item"><a class="link" href=""><i class="fab fa-linkedin-in"></i></a></li>
                <li class="nav-item"><a class="link" href=""><i class="fab fa-facebook-f"></i></a></li>
                <li class="nav-item"><a class="link" href=""><i class="fab fa-pinterest"></i></a></li>
            </ul>

            <p class="copy-right">&copy; @{{currentYear}}</p>
        </footer>
    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>
window.addEventListener('DOMContentLoaded', (event) => {
       //removes loader when the page is fully loaded with the delay
       setTimeout(function() {
        var loaderDiv = document.getElementsByClassName("spinner-container")[0];
        if (loaderDiv) {

            loaderDiv.style.display = "none";
            document.getElementById("app").style.display = "block";
        }
    }, 300);
});
    </script>
</body>

</html>
