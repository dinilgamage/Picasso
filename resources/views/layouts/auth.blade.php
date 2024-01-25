<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Picasso</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicons\icons8-art-16.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    

    

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/home.css']) 
    @livewireStyles
</head>
<body style="background-image: url({{ asset('assets/loginreg-bg.jpg') }}); background-repeat: no-repeat; background-size: cover; background-attachment:fixed">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/picasso. (2).png') }}" alt="" height="35">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li>
                            <form action="{{ route('search') }}" method="GET" class="form-inline my-2 my-lg-0 me-3">
                                <div class="input-group">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search by artworks, artists, material, category, etc" aria-label="Search" name="query" id="search" style="width: 600px; background-color:antiquewhite;">
                                    <button class="btn btn-custom" type="submit">Search</button>
                                </div>
                            </form>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                       
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('home'))
                                <li class="nav-item lead">
                                    <a style="font-weight: 900" href="{{ url('/') }}" class="nav-link">Home</a>
                                </li>
                            @endif
                            <li class="nav-item lead">
                                <a style="font-weight: 900" href="{{ url('/artists') }}" class="nav-link">Artists</a>
                            </li>
                            <li class="nav-item lead">
                                <a style="font-weight: 900" href="{{ url('/arts') }}" class="nav-link">Artworks</a>
                            </li>
                          
                            @if (Route::has('login'))
                                <li class="nav-item lead">
                                    <a class="nav-link" style="font-weight: 900" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item lead">
                                    <a class="nav-link" style="font-weight: 900" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item lead">
                                <a style="font-weight: 900" href="{{ url('/') }}" class="nav-link">Home</a>
                            </li>
                            
                            <li class="nav-item lead">
                                <a style="font-weight: 900" href="{{ url('/artists') }}" class="nav-link">Artists</a>
                            </li>
                            <li class="nav-item lead">
                                <a style="font-weight: 900" href="{{ url('/arts') }}" class="nav-link">Artworks</a>
                            </li>
                            <li class="nav-item lead">
                                <a style="font-weight: 900" href="{{ url('/cart') }}" class="nav-link">Cart</a>
                            </li>
                            <li class="nav-item lead">
                                <a style="font-weight: 900" href="{{ url('/home') }}" class="nav-link">Profile</a>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="{{ Auth::user()->avatar ? asset('avatars/' . Auth::user()->avatar) : asset('default_image/df.webp') }}" alt="User Avatar" class="rounded-circle" height="35" width="35">
                                </a>

                                <div class="dropdown-menu dropdown-menu-end custom-dropdown-main" aria-labelledby="navbarDropdown">
                                    <a href="{{ url('/home') }}" class="dropdown-item custom-dropdown-item">Profile</a>
                                    <a href="{{ url('/profile/analytics') }}" class="dropdown-item custom-dropdown-item">Analytics</a>
                                    <a href="{{ url('/wishlist') }}" class="dropdown-item custom-dropdown-item">Wishlist</a>
                                    <a href="{{ url('/artworks') }}" class="dropdown-item custom-dropdown-item">Manage Artworks</a>
                                    <a href="{{ url('/orders') }}" class="dropdown-item custom-dropdown-item">Manage Orders</a>
                                    <a href="{{ url('/orders/history') }}" class="dropdown-item custom-dropdown-item">Order History</a>
                                    <a class="dropdown-item custom-dropdown-item" href="{{ route('logout') }}"
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

        

        <main style="margin-top: 60px" class="py-4">
            @yield('content') 
            <!-- when you extend(layouts.app) in the begining of a blade file, sections named 'content' in blade files will go here-->
        </main>
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript">
            $(function() {
                $("#search").autocomplete({
                    source: "{{ route('search.autocomplete') }}",
                    minLength: 2,
                    select: function(event, ui) {
                        window.location.href = ui.item.url;
                    }
                });
            });
        </script>

    </div>
    @livewireScripts
   
    
</body>
</html>
