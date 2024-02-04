@extends('layouts.app')



@section('content')
<div class="container">
    <h1>Manage your Profile</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
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
                    <div class="row">
                        <div class="col-md-5">
                            <div style="width: 450px; height: 450px; overflow: hidden;">
                                <img src="{{ Auth::user()->avatar ? asset('avatars/' . Auth::user()->avatar) : asset('default_image/df.webp') }}" alt="User Avatar" style="width: 500px; height: 500px; overflow: hidden;">
                            </div>

                        </div>
                        <div class="col-md-7">
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
        </div>
        
    </div>
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
</div>
@endsection