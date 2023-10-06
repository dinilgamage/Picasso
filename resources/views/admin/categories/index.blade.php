@extends('layouts.admindash')

@section('content')
<div class="container">
    <h1>Categories List</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-success mb-3">Add New Category</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td>{{ $category->updated_at }}</td>
                    <td>
                        <div class="d-flex align-items-center"> <!-- Flexbox container -->
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning mr-2">Edit</a> <!-- Added margin for spacing -->
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
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
