<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Picasso</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="icon" href="{{ asset('favicons\icons8-art-16.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">


        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        


        @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/home.css'])
        @livewireStyles


        <!-- Styles -->
        {{-- <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style> --}}
        <style>
            h1{
                color: #FFBB07;
                font-weight: bold
                
            }
            
            body {
                cursor: url('/assets/paint-brush.png') 0 0, auto;
                
            }
            button, a {
                cursor: url('/assets/paint-brush.png'), auto;
            }
            .btn{
                cursor: url('/assets/paint-brush.png'), auto;
            }
        </style>
    </head>
    <body class="antialiased" style="background-image: url({{ asset('assets/bg.webp') }}); background-repeat: no-repeat; background-size: cover; background-attachment:fixed">
        
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
                            
                            @auth
                            
                            
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

                            @endauth
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
                        
                                
                            @endguest

                        </ul>
                    </div>
                    
                </div>
                
            </nav>
            @guest 
            <div class="vh-100" > 
                <div class="container h-100 d-flex justify-content-start align-items-center">
                    <div class="col-md-6">
                        <div class="translucent-container"  style="background-color: rgba(147, 56, 0, 0.8); padding: 20px; color:#fff">
                            <h1>Welcome to Picasso!</h1>
                            <p style="font-size: 1.5em"> Imagine a place where creativity knows no bounds, where every brushstroke is a masterpiece waiting to be discovered, and where artists reign supreme. Welcome to Picasso, your one-stop destination for all things art, and the ultimate marketplace where artists like you can not only showcase but also sell your exceptional creations</p>
                            <a href="{{ route('register') }}" class="btn btn-secondary" style="background-color: #c94f03">Get Started</a>
                        </div>
                    </div>

            </div>
            
            @endguest
            
            

            @auth
            <style>
                #main-c {
                    margin-top: 40px;
                }
            </style>
            @endauth

            @if($mostViewedCategory && $mostViewedCategory->artworks->count() > 0)
            <div class="vh-100" id="main-c">
                <div class="container h-100 d-flex justify-content-center align-items-center">
                    <div class="col-md-12">
                        <div class="translucent-container" style="background-color: rgba(147, 56, 0, 0.9); padding: 20px; color:#fff">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <h1 class="pb-4">Featured Category: {{ $mostViewedCategory->name }}</h1>
                                    <p style="font-size: 1.7em">{{ $mostViewedCategory->description }}</p>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="row">
                                        @foreach($mostViewedCategory->artworks as $artwork)
                                            <div class="col-12 col-sm-6">
                                                <div class="card mb-4 shadow">
                                                    <img class="card-img-top card-img" src="{{ asset('images/' . $artwork->image) }}" alt="{{ $artwork->title }}">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $artwork->title }}</h5>
                                                        <p class="card-text"><small class="text-muted">For sale by {{ $artwork->user->name }}</small></p>
                                                        <p class="card-text"><small>{{ $artwork->views }} views</small></p>
                                                        <div class="d-flex flex-column align-items-center">
                                                            <a href="{{ route('arts.show', $artwork) }}" class="btn btn-primary w-100">View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if($topProfileViewsUsers && $topProfileViewsUsers->count() > 0)
            <div class="vh-100">
                <div class="container h-100 d-flex justify-content-center align-items-center">
                    <div class="col-md-12">
                        <div class="translucent-container" style="background-color: rgba(147, 56, 0, 0.9); padding: 20px; color:#fff">
                            <h1 class="pb-4">Picasso's Most Popular Artists</h1>
                            <div class="row">
                                @foreach($topProfileViewsUsers as $user)
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <div class="card mb-4 shadow">
                                            <img src="{{ asset('avatars/' . $user->avatar) }}" alt="User Avatar" class="img-fluid">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $user->name }}</h5>
                                                <p class="card-text">{{ Str::limit($user->bio, 100) }}</p>
                                                <a href="{{ route('artists.show', $user) }}" class="btn btn-primary w-100">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if($mostPopularArtwork)
            <div class="vh-100">
                <div class="container h-100 d-flex justify-content-center align-items-center">
                    <div class="col-md-12">
                        <div class="translucent-container" style="background-color: rgba(147, 56, 0, 0.9); padding: 20px; color:#fff">
                            <h1 class="pb-4">{{ $mostPopularArtwork->title }}, a Popular Piece of Art</h1>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <p style="font-size: 1.7em">{{ $mostPopularArtwork->desc }}</p>
                                    <a href="{{ route('arts.show', $mostPopularArtwork) }}" class="btn btn-secondary" style="background-color: #c94f03">View Artwork</a>
                                </div>
                                <div class="col-12 col-md-6">
                                    <img src="{{ asset('images/' . $mostPopularArtwork->image) }}" alt="Artwork Image" class="img-fluid" height="500" width="500">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <div class="vh-100" >
                <div class="container h-100 d-flex justify-content-center align-items-center">
                    <div class="col-md-12">
                        <div class="translucent-container" style="background-color: rgba(147, 56, 0, 0.9); padding: 20px; color:#fff">
                            <h1 class="pb-4">New Releases</h1>
                            <div class="row">
                                @foreach($latestArtworks as $artwork)
                                    <div class="col-md-3">
                                        <div class="card mb-4 shadow">
                                            <img class="card-img-top card-img" src="{{ asset('images/' . $artwork->image) }}" alt="{{ $artwork->title }}">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $artwork->title }}</h5>
                                                <p class="card-text"><small class="text-muted">For sale by {{ $artwork->user->name }}</small></p>
                                                <p class="card-text"><small>{{ $artwork->views }} {{ $artwork->views == 1 ? 'view' : 'views' }}</small></p>
                                                <div class="d-flex flex-column align-items-center">
                                                    <a href="{{ route('arts.show', $artwork) }}" class="btn btn-primary w-100">View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if($highestRatedArtist)
                <div class="vh-100" > 
                    <div class="container h-100 d-flex justify-content-center align-items-center">
                        <div class="col-md-12">
                            <div class="translucent-container" style="background-color: rgba(147, 56, 0, 0.9); padding: 20px; color:#fff">
                                <h1 class="pb-4" >Say Hello to {{ $highestRatedArtist->name }}, Picasso's Highest Rated Artist</h1>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ asset('avatars/' . $highestRatedArtist->avatar) }}" alt="Artist Avatar"  height="500" width="500">
                                    </div>
                                    <div class="col-md-6">
                                        <p style="font-size: 1.7em">{{ $highestRatedArtist->bio }}</p>
                                        <a href="{{ route('artists.show', $highestRatedArtist->id) }}" class="btn btn-secondary" style="background-color: #c94f03">View Artist</a>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            
            

            
            
            
            
            

           

            {{-- <div class="container">
                <div class="row">
                    @foreach ($artworks as $artwork)
                        <div class="col-md-3">
                            <div class="card mb-4">
                                <img class="card-img-top card-img" src="{{ asset('images/' . $artwork->image) }}" alt="{{ $artwork->title }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $artwork->title }}</h5>
                                    <p class="card-text"><small class="text-muted">For sale by {{ $artwork->user->name }}</small></p>
                                    <p class="card-text"><small>{{ $artwork->views }} {{ $artwork->views == 1 ? 'view' : 'views' }}</small></p>                                    <div class="d-flex flex-column align-items-center">
                                        <a href="{{ route('arts.show', $artwork) }}" class="btn btn-primary w-100">View</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div> --}}

            @include('layouts.footer')
        
        </div>


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

        @livewireScripts

       
       

    </body>
    
    
</html>
