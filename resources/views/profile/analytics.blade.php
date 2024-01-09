@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row justify-content-center">
        <h1>View your Analytics</h1>
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div style="background-color: #933800" class="card-header text-white">Engagement and Statistics</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="card text-center mb-3 card-outer">
                                <div class="card-body card-inner">
                                    <h5 class="card-title">{{ $totalArtworkViews }}</h5>
                                    <p class="card-text">Total Artwork Views</p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="card text-center mb-3 card-outer">
                                <div class="card-body card-inner">
                                    <h5 class="card-title">{{ number_format($averageArtworkView, 1) }}</h5>
                                    <p class="card-text">Average Views per Artwork</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card text-center mb-3 card-outer">
                                <div class="card-body card-inner">
                                    <h5 class="card-title">{{ $totalRatings ?? 0 }}</h5>
                                    <p class="card-text">Total Ratings</p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="card text-center mb-3 card-outer">
                                <div class="card-body card-inner">
                                    <h5 class="card-title">{{ number_format($averageRating, 1) ?? 0 }}</h5>
                                    <p class="card-text">Average Rating</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card text-center mb-3 card-outer">
                        <div class="card-body card-inner">
                            <h5 class="card-title">{{ Auth::user()->profile_views ?? 0 }}</h5>
                            <p class="card-text">Profile Views</p>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div style="background-color: #933800" class="card-header text-white">Artworks and Revenue</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card text-center mb-3 card-outer">
                                <div class="card-body card-inner">
                                    <h5 class="card-title">{{ Auth::user()->artworks->count() ?? 0 }}</h5>
                                    <p class="card-text">Artworks on Sale</p>
                                </div>
                            </div>
                            

                        </div>
                        <div class="col-md-6">
                            <div class="card text-center mb-3 card-outer">
                                <div class="card-body card-inner">
                                    <h5 class="card-title">{{ Auth::user()->artworksSold ?? 0 }}</h5>
                                    <p class="card-text">Artworks Sold</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card text-center mb-3 card-outer" >
                        <div class="card-body card-inner" >
                            <h5 class="card-title">{{ Auth::user()->totalRevenue ?? 0 }}</h5>
                            <p class="card-text">Total Revenue (LKR)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection