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
                    <p>Views: {{ $artwork->views }}</p>
                    <p>Price: {{ $artwork->price }}</p>
                    <p>Material: {{ $artwork->material }}</p>
                    <p>Size: {{ $artwork->size }}</p>
                    <p>Frame: {{ $artwork->frame }}</p>
                    <p>Signature: {{ $artwork->signature }}</p>
                </div>

                {{-- buttons div --}}
                <div class="d-flex">
                    <div style="padding-right: 10px;">
                        <form action="{{ route('arts.add-to-cart', $artwork) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">Add to cart</button>
                        </form>
                    </div>
                    <div style="padding-right: 10px;">
                        <a href="#" class="btn btn-primary">Add to wishlist</a>
                    </div>
                    <div style="padding-right: 10px;">
                        <a href="{{ route('artists.show', $artwork->user->id) }}" class="btn btn-primary">View artist</a>
                    </div>
                    <div style="padding-right: 10px;">
                        <a href="#" class="btn btn-success">Purchase</a>
                    </div>
                    <div>
                        <a href="{{ url()->previous() }}" class="btn btn-danger">Back</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
@endsection