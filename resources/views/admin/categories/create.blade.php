@extends('layouts.admindash')

@section('content')
<div class="container">
    <h1>Add New Category</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        </div>
        
        <div class="form-group" style="margin-bottom: 20px">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Add Category</button>
        <a href="{{ route('categories.index') }}" class="btn btn-danger">Back</a>
    </form>
</div>
@endsection
