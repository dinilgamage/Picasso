@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $artwork->title }}</h1>

        <div class="row">
            <div class="col-md-6">
                <div style="width: 500px; height: 500px; overflow: hidden;">
                    <img src="{{ asset('images/' . $artwork->image) }}" alt="{{ $artwork->title }}" style="object-fit: contain; width: 100%; height: 100%;">
                </div>
            </div>

            <div class="col-md-6">
                {{-- details div --}}
                <div> 
                    <p>Description: {{ $artwork->desc }}</p>
                    <p>Artist: {{ $artwork->user->name }}</p>
                    <p>Category: {{ $artwork->category->name }}</p>
                    <p>Price: {{ $artwork->price }}</p>
                    <p>Material: {{ $artwork->material }}</p>
                    <p>Size: {{ $artwork->size }}</p>
                    <p>Frame: {{ $artwork->frame }}</p>
                    <p>Signature: {{ $artwork->signature }}</p>
                </div>

                {{-- buttons div --}}
                <div>
                    <a href="#" class="btn btn-primary">Add to cart</a>
                    <a href="#" class="btn btn-primary">Add to wishlist</a>
                    <a href="{{ route('artists.show', $artwork->user->id) }}" class="btn btn-primary">View artist</a>
                    <a href="#" class="btn btn-primary">Purchase</a>
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection