@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row justify-content-center">
        <h1>View your Analytics</h1>
        <div class="col-md-8">
                <div class="card shadow">
                    <div style="background-color: #933800" class="card-header text-white"></div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div  class="card text-center mb-3 card-outer">
                                    <div  class="card-body card-inner">
                                        <h5 class="card-title">{{ Auth::user()->profile_views ?? 0 }}</h5>
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
    </div>
@endsection


