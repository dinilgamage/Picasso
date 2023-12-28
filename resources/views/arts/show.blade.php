@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $artwork->title }}</h1>
    <img src="{{ asset('images/' . $artwork->image) }}" alt="{{ $artwork->title }}">

    <!-- Display the art's details here -->

    <a href="#" class="btn btn-primary">Add to cart</a>
    <a href="#" class="btn btn-primary">Purchase</a>
    <a href="{{ route('arts.main') }}" class="btn btn-danger">Back</a>

</div>
@endsection