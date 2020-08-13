<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

</head>

<body style="overflow-x: hidden;">

    <header class="" style="height: 80px;">
        <nav class="navbar navbar-expand-xl navbar-light navbar-togglable  fixed-top bg-light">
            <div class="container py-3">

                <!-- Brand -->
                <a class="navbar-brand" href="index.html">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <h3> <i class="fas fa-blog mx-3"></i> {{ config('app.name', 'Laravel') }}</h3>
                    </a>
                </a>

                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbarCollapse">



                    <!-- Links -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Social -->

                        <li class="nav-item-divider">
                            <span class="nav-link">
                                <span></span>
                            </span>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fab fa-github"></i>
                                <span class="d-xl-none ml-2">
                                    Github
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fab fa-twitter"></i>
                                <span class="d-xl-none ml-2">
                                    Twitter
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fab fa-instagram"></i>
                                <span class="d-xl-none ml-2">
                                    Instagram
                                </span>
                            </a>
                        </li>

                        <li class="nav-item-divider">
                            <span class="nav-link">
                                <span></span>
                            </span>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('login'))
                            <div class="d-flex">
                                @auth
                                <a href="{{ url('/home') }}" class="nav-link">Dashboard</a>
                                @else
                                <a href="{{ route('login') }}" class="nav-link mx-2">Login</a>

                                @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                                @endif
                                @endauth
                            </div>
                            @endif
                        </li>
                    </ul>

                </div> <!-- / .navbar-collapse -->

            </div> <!-- / .container -->
        </nav>
    </header>
    <!-- showcase -->
    @yield('showcase')

    <section class="posts my-5">
        <div class="container">
            <div class="row">

                @yield('content')

            </div>
        </div>
    </section>

    <footer class="mt-5 bg-dark">
        <div class="container">
            <div class="py-5 mx-auto" style="color:#e8e3e3;">
                <div class="row">
                    <div class="col-sm-3">
                        <h4>About</h4>
                        <p>About Laravel Blog</p>
                        <p>About Our Adds</p>
                        <p>Advertise</p>
                        <p>Brand Kit</p>
                        <p>Rss Feed</p>
                    </div>

                    <div class="col-sm-3">
                        <h4>Sections</h4>
                        <p>Reviews</p>
                        <p>Gamming</p>
                        <p>Video</p>
                        <p>Writters Guide</p>
                        <p>Rss Feed</p>
                    </div>

                    <div class="col-sm-3">
                        <h4>Categories</h4>
                        <p>Entertainment</p>
                        <p>Sports</p>
                        <p>Music</p>
                    </div>

                    <div class="col-sm-3">
                        <h4>Contribute</h4>
                        <p>Entertainment</p>
                        <p>Sports</p>
                        <p>Music</p>
                    </div>
                    <div class="col-sm-12 text-center mt-3">
                        <p class="text-muted"> &copy; 2020 JoshErias.co. All rights Reserved </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>