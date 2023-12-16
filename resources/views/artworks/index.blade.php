@extends(auth()->user()->role ? 'layouts.admindash' : 'layouts.app')
{{-- @extends('layouts.app')
@extends('layouts.admindash')  --}}

@section('content')
<div class="container">
    <h1>Manage Artworks</h1>
    
    <a href="{{ route('artworks.create') }}" class="btn btn-success mb-3">Add New Artwork</a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Artist</th>
                <th>Image</th>
                <th>Category</th>
                <th>Price</th>
                <th>Sold</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($artworks as $artwork)
                <tr>
                    <td>{{ $artwork->title }}</td>
                    <td>{{ $artwork->desc }}</td>
                    <td>{{ $artwork->user->email }}</td> 
                    <td><img src="{{ asset('images/' . $artwork->image) }}" alt="{{ $artwork->title }}" width="100"></td>
                    <td>{{ $artwork->category->name }}</td>
                    <td>{{ $artwork->price }}</td>
                    <td>{{ $artwork->sold ? 'Yes' : 'No' }}</td>
                    <td>{{ $artwork->created_at }}</td>
                    <td>{{ $artwork->updated_at }}</td>
                    <td>
                        @can('update', $artwork)
                            <a href="{{ route('artworks.edit', $artwork) }}" class="btn btn-warning">Edit</a>
                        @endcan
                        @can('delete', $artwork)
                            <form action="{{ route('artworks.destroy', $artwork) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this artwork?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @php
        session()->forget('success'); // Remove the success message from the session
    @endphp
@endif
</div>
@endsection