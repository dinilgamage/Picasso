@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="background-color: #933800" class="card-header text-white">{{ __('Edit Contact Details') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('profile.update-contact') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value="{{ $user->email }}" required class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="phone" value="{{ $user->phone }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea id="address" name="address" class="form-control">{{ $user->address }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Update Contact Details</button>
                        <a href="{{ route('home') }}" class="btn btn-danger mt-3">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection