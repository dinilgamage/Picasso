@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h1>Artworks</h1>
            </div>
            <div class="col-md-3">
                <form action="{{ route('arts.main') }}" method="GET">
                    <select name="category_id" onchange="this.form.submit()" class="rounded" style="background-color: #933800; color: #FFBB07; font-weight:bold; height: 30px; width: 300px">
                        <option value="">Filter by category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </form>
            </div>
        </div>
    </div>

    <div id="main-c" class="container">
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