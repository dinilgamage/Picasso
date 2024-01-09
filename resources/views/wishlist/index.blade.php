@extends('layouts.app')

@section('content')
<div class="container">
    <h1>My Wishlist</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if($wishlistItems->isEmpty())
        <p>Your wishlist is empty.</p>
    @else
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Artwork</th>

                    {{-- <th>Description</th> --}}
                    <th>Artist</th>
                    <th>Added on</th>
                    <th>Actions</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($wishlistItems as $item)
                <tr>
                    <td>{{ $item->artwork->title }}</td>
                    <td>
                        <img src="{{ asset('images/' . $item->artwork->image) }}" alt="{{ $item->artwork->title }}" class="img-thumbnail" width="100">
                
                    </td>
                    {{-- <td>{{ $item->artwork->desc }}</td> --}}
                    <td>{{ $item->artwork->user->email }}</td>
                    <td>{{ $item->created_at }}</td>

                    <td>
                        
                        <a href="{{ route('arts.show', $item->artwork->id) }}" class="btn btn-primary">View Artwork</a>
                        <form action="{{ route('wishlist.remove', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <div class="d-flex justify-content-end mt-3">
        <form action="{{ route('wishlist.clear') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-warning me-2">Clear All</button>
        </form>
        <a href="{{ url()->previous() }}" class="btn btn-danger">Back</a>
    </div>
</div>
@endsection