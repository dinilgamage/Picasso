@extends('layouts.app')



@section('content')
<div class="container">
    <h1>Manage your Profile</h1>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div style="background-color: #933800" class="card-header text-white"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img src="{{ Auth::user()->avatar ? asset('avatars/' . Auth::user()->avatar) : asset('default_image/df.webp') }}" alt="User Avatar" class="rounded-circle mb-3" height="100" width="100">
                    <h3>{{ Auth::user()->name }}</h3>
                    <p>{{ Auth::user()->headline }}</p>
                    
                    <p>{{ Auth::user()->bio }}</p>
                    <p><a href="{{ Auth::user()->social_links }}">{{ Auth::user()->social_links }}</a></p>
                    <p><a href="{{ Auth::user()->website }}">{{ Auth::user()->website }}</a></p>
                    <a href="{{ route('profile.edit') }}" class="btn btn-primary mt-3">Edit Profile</a>
                    <a href="{{ route('profile.edit-contact') }}" class="btn btn-primary mt-3">Edit Contact Details</a>
                </div>
            </div>
        </div>
        
    </div>
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
</div>
@endsection