@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow mb-4">
                <div style="background-color: #933800" class="card-header text-white">{{ __('Profile') }}</div>

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
        <div class="col-md-5">
            <div class="card shadow">
                <div style="background-color: #933800" class="card-header text-white">{{ __('Analytics') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div  class="card text-center mb-3 card-outer">
                                <div  class="card-body card-inner">
                                    <h5 class="card-title">{{ Auth::user()->profileViews ?? 0 }}</h5>
                                    <p class="card-text">Profile Views</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center mb-3 card-outer">
                                <div class="card-body card-inner">
                                    <h5 class="card-title">{{ Auth::user()->artworksOnSale ?? 0 }}</h5>
                                    <p class="card-text">Artworks on Sale</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center mb-3 card-outer">
                                <div class="card-body card-inner">
                                    <h5 class="card-title">{{ Auth::user()->artworksSold ?? 0 }}</h5>
                                    <p class="card-text">Artworks Sold</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card text-center mb-3 card-outer">
                                <div class="card-body card-inner">
                                    <h5 class="card-title">{{ Auth::user()->noRating ?? 0 }}</h5>
                                    <p class="card-text">No. of Ratings</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card text-center mb-3 card-outer">
                                <div class="card-body card-inner">
                                    <h5 class="card-title">{{ Auth::user()->avgRating ?? 0 }}</h5>
                                    <p class="card-text">Average Rating</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card text-center mb-3 card-outer">
                                <div class="card-body card-inner">
                                    <h5 class="card-title">{{ Auth::user()->totalRevenue ?? 0 }}</h5>
                                    <p class="card-text">Total Revenue (LKR)</p>
                                </div>
                            </div>
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