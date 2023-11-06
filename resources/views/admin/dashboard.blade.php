@extends('layouts.admindash') 

@section('content')
<div class="container">
    <h1>Welcome, {{ Auth::user()->name }}</h1>
    
   
</div>
@endsection
