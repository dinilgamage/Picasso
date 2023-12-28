@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Artists</h1>

    <div class="row">
        @foreach ($artists as $artist)
            <div class="col-md-3">
                <div class="card mb-4 shadow">
                    <img class="card-img-top" src="{{ $artist->avatar ? asset('avatars/' . $artist->avatar) : asset('default_image/df.webp') }}" alt="{{ $artist->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $artist->name }}</h5>
                        <p class="card-text">{{ $artist->headline }}</p>
                        <a href="{{ route('artists.show', $artist) }}" class="btn btn-primary w-100">View</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection