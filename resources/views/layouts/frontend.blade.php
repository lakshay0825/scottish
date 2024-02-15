<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Default meta description')">
    <meta name="keywords" content="@yield('meta_keywords', 'Default, Keywords')">
    <meta name="author" content="@yield('meta_author', 'Your Name')">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Laravel App')</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/plugins/perfect-scrollbar.min.js',
    'resources/js/plugins/smooth-scrollbar.min.js', 'resources/js/material-dashboard.min.js', 'resources/js/custom.js'])
    <!-- Additional stylesheets, scripts, or any other head content -->
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link id="pagestyle" href="{{ Vite::asset('resources/css/material-dashboard.css?v=3.0.0') }}" rel="stylesheet" />
    @yield('head')
</head>

<body>

    <!-- Navbar or header section -->
    <header class="header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <div class="logo">
                        <img src="{{ Vite::asset('resources/images/logo.png') }}" width="80" class="navbar-brand-img h-100" alt="main_logo">
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="top-bar">
                        <ul class="team-logo d-flex">
                            <li class="franchise-logo"><a href="#"><img src="{{ Vite::asset('resources/images/abu-dhabi-knight-riders.png') }}" class="img-responsive"></a></li>
                            <li class="franchise-logo"><a href="#"><img src="{{ Vite::asset('resources/images/desert-vipers.png') }}" class="img-responsive"></a></li>
                            <li class="franchise-logo"><a href="#"><img src="{{ Vite::asset('resources/images/dubai-capitals.png') }}" class="img-responsive"></a></li>
                            <li class="franchise-logo"><a href="#"><img src="{{ Vite::asset('resources/images/gulf-giants.png') }}" class="img-responsive"></a></li>
                            <li class="franchise-logo"><a href="#"><img src="{{ Vite::asset('resources/images/mi-emirates.png') }}" class="img-responsive"></a></li>
                            <li class="franchise-logo"><a href="#"><img src="{{ Vite::asset('resources/images/sharjah-warriors.png') }}" class="img-responsive"></a></li>
                        </ul>
                    </div>
                    <div class="menu-bar">
                        <ul>
                            <li class="franchise-logo"><a href="#/teams/1">Home</a></li>
                            <li class="franchise-logo"><a href="#/teams/2">About</a></li>
                            <li class="franchise-logo"><a href="#/teams/3"></a></li>
                            <li class="franchise-logo"><a href="#/teams/4"></a></li>
                            <li class="franchise-logo"><a href="#/teams/5"></a></li>
                            <li class="franchise-logo"><a href="#/teams/6"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <!-- Footer section -->
    <footer>
        <!-- Your footer content goes here -->
    </footer>

    <!-- Additional scripts or any other footer content -->
    @yield('footer')

</body>

</html>