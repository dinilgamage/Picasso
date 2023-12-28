@extends('layouts.app')

@section('content')

    <div id="main-c" class="container">
        <h1>Artworks</h1>
        <div class="row">
            @foreach ($artworks as $artwork)
                <div class="col-md-3">
                    <div class="card mb-4 shadow">
                        <img class="card-img-top card-img" src="{{ asset('images/' . $artwork->image) }}" alt="{{ $artwork->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $artwork->title }}</h5>
                            <p class="card-text"><small class="text-muted">For sale by {{ $artwork->user->name }}</small></p>
                            <div class="d-flex flex-column align-items-center">
                                <a href="{{ route('arts.show', $artwork) }}" class="btn btn-primary w-100">View</a>
                    
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection