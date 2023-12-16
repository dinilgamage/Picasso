@extends(auth()->user()->role ? 'layouts.admindash' : 'layouts.app')


@section('content')
<div class="container">
    <h1>Edit Artwork</h1>

    <form action="{{ route('artworks.update', $artwork->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <!-- Title input -->
        <div class="form-group">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $artwork->title }}" required>
        </div>

        <!-- Description input -->
        <div class="form-group">
            <label for="desc" class="form-label">Description</label>
            <textarea class="form-control" id="desc" name="desc" required>{{ $artwork->desc }}</textarea>
        </div>

        <!-- Image input -->
        <div class="form-group">
            <label for="image" class="form-label">Image (leave blank to keep unchanged)</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <!-- Category input -->
        <div class="form-group">
            <label for="category_id" class="form-label">Category</label>
            <select class="form-control" id="category_id" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $artwork->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Price input -->
        <div class="form-group">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $artwork->price }}" required>
        </div>

        <!-- Sold input -->
        <div class="form-group">
            <label for="sold" class="form-label">Sold</label>
            <select class="form-control" id="sold" name="sold">
                <option value="0" {{ $artwork->sold == 0 ? 'selected' : '' }}>No</option>
                <option value="1" {{ $artwork->sold == 1 ? 'selected' : '' }}>Yes</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Artwork</button>
    </form>
</div>
@endsection