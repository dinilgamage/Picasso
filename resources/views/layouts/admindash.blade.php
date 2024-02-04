<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Picasso</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicons/icons8-art-16.png') }}" type="image/x-icon">
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/admin.css']) 

    <style>
        
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
<body>
    <div id="sidebar">
        <div class="sidebar-header">
            <div class="navbar-brand">
                <img src="{{ asset('assets/picasso. (2).png') }}" alt="" height="35">
            </div>
            <h3>Admin Dashboard</h3>
        </div>
        <ul class="list-unstyled components">
            <li>
                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <li>
                <a href="{{ route('users.index') }}">Manage Users</a>
            </li>
            <li>
                <a href="{{ route('artworks.index') }}">Manage Artworks</a>
            </li>
            <li>
                <a href="{{ route('categories.index') }}">Manage Categories</a>
            </li>
            <li>
                <a href="{{ route('orders.index') }}">Manage Orders</a>
            </li>
            <li>
                <a href="{{ route('orders.history') }}">All Order History</a>
            </li>
          
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
    <div id="content">
        @yield('content')
    </div>
</body>
</html>
