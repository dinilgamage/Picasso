@extends(auth()->user()->role ? 'layouts.admindash' : 'layouts.app')

@section('content')
<div class="container">
    <h1>Add New Artwork</h1>

    <form action="{{ route('artworks.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="desc" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Category</label>
            <select name="category_id" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Price</label>
                    <input type="number" step="0.01" name="price" class="form-control" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Material</label>
                    <input type="text" name="material" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Size</label>
                    <input type="text" name="size" class="form-control">
                </div>
            </div>
        </div>

        <div class="row" style="margin-bottom: 20px">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Frame</label>
                    <select name="frame" class="form-control">
                        <option value="included">Included</option>
                        <option value="not included">Not Included</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Signature</label>
                    <input type="text" name="signature" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Sold</label>
                    <select name="sold" class="form-control">
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Add Artwork</button>
        <a href="{{ route('artworks.index') }}" class="btn btn-danger">Back</a>
    </form>
</div>
@endsection