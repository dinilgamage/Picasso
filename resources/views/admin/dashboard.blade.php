@extends('layouts.admindash') 

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <p>Welcome, {{ Auth::user()->name }}!</p>
    
    <a href="{{ route('users.index') }}" class="btn btn-primary">Manage Users</a>
    <a href="{{ route('categories.index') }}" class="btn btn-primary">Manage Categories</a>

    
</div>
@endsection


