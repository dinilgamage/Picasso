@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div style="background-color: #933800" class="card-header text-white">{{ __('Edit Profile') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" value="{{ $user->name }}" required class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="headline">Headline</label>
                            <input type="text" id="headline" name="headline" value="{{ $user->headline }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="avatar" class="form-label">Avatar (leave blank to keep unchanged)</label>
                            <input type="file" class="form-control" id="avatar" name="avatar">
                        </div>

                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="text" id="website" name="website" value="{{ $user->website }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="bio">Bio</label>
                            <textarea id="bio" name="bio" class="form-control">{{ $user->bio }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="social_links">Social Links</label>
                            <input type="text" id="social_links" name="social_links" value="{{ $user->social_links }}" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Update Profile</button>
                        <a href="{{ route('home') }}" class="btn btn-danger mt-3">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection