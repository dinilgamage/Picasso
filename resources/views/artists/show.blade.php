@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $artist->name }}</h1>
    <img class="rounded-circle" height="200" src="{{ $artist->avatar ? asset('avatars/' . $artist->avatar) : asset('default_image/df.webp') }}" alt="{{ $artist->name }}">

    <!-- Display the artist's details here -->

    <a href="#" class="btn btn-primary">Contact</a>
    <a href="#" class="btn btn-primary">Rate</a>
    <a href="{{ url()->previous() }}" class="btn btn-danger">Back</a>

</div>
@endsection