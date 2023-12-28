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

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" step="0.01" id="price" name="price" value="{{ $artwork->price }}" class="form-control" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="material">Material</label>
                    <input type="text" id="material" name="material" value="{{ $artwork->material }}" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="size">Size</label>
                    <input type="text" id="size" name="size" value="{{ $artwork->size }}" class="form-control">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="frame">Frame</label>
                    <select id="frame" name="frame" class="form-control">
                        <option value="included" {{ $artwork->frame == 'included' ? 'selected' : '' }}>Included</option>
                        <option value="not included" {{ $artwork->frame == 'not included' ? 'selected' : '' }}>Not Included</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="signature">Signature</label>
                    <input type="text" id="signature" name="signature" value="{{ $artwork->signature }}" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="sold">Sold</label>
                    <select id="sold" name="sold" class="form-control">
                        <option value="0" {{ $artwork->sold == 0 ? 'selected' : '' }}>No</option>
                        <option value="1" {{ $artwork->sold == 1 ? 'selected' : '' }}>Yes</option>
                    </select>
                </div>
            </div>
        </div>

        <div style="margin-top: 20px">
            <button  type="submit" class="btn btn-primary">Update Artwork</button>
        <a href="{{ route('artworks.index') }}" class="btn btn-danger">Back</a>
        </div>
        
    </form>
</div>
@endsection