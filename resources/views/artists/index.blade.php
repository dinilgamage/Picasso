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
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title">{{ $artist->name }}</h5>
                            <div class="rating-star">
                                <i style="color: #fdc62e;" class="fas fa-star"></i>
                                <span class="rating-number">{{ number_format($artist->averageRating, 1) }}</span>
                            </div>
                        </div>
                        <p class="card-text">{{ $artist->headline }}</p>
                        <a href="{{ route('artists.show', $artist) }}" class="btn btn-primary w-100">View</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

<style>
    .rating-star {
        position: relative;
        font-size: 13px;
    }
    

    .rating-number {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 11px; 
        color: black; 
        font-weight: bolder;
    }
</style>
