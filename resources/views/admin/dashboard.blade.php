@extends('layouts.admindash')

@section('content')

<div class="container">
    
    <div class="row justify-content-center">
        <h1>Dashboard</h1>
        <div class="row">
            <div class="col-md-2">
                <div class="card text-center mb-3 card-outer">
                    <div class="card-body card-inner">
                        <h5 class="card-title">{{ $totalUsers }}</h5>
                        <p class="card-text">Total Users</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                {{-- <div class="card text-center mb-3 card-outer">
                    <div class="card-body card-inner">
                        <h5 class="card-title">{{ $totalArtworks }}</h5>
                        <p class="card-text">Total Artworks On Sale</p>
                    </div>
                </div> --}}
                <div class="card text-center mb-3 card-outer">
                    <div class="card-body card-inner">
                        <h5 class="card-title">{{ $totalArtworkViews }}</h5>
                        <p class="card-text">Artwork Clicks</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card text-center mb-3 card-outer">
                    <div class="card-body card-inner">
                        <h5 class="card-title">{{ $totalProfileViews }}</h5>
                        <p class="card-text">Profile Clicks</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card text-center mb-3 card-outer">
                    <div class="card-body card-inner">
                        <h5 class="card-title">{{ $totalCategories }}</h5>
                        <p class="card-text">Total Categories</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card text-center mb-3 card-outer">
                    <div class="card-body card-inner">
                        <h5 class="card-title">{{ $totalRatings }}</h5>
                        <p class="card-text">Ratings Submitted</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card text-center mb-3 card-outer">
                    <div class="card-body card-inner">
                        <h5 class="card-title">{{ $totalOrders }}</h5>
                        <p class="card-text">Total Orders Placed</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <canvas width="400" id="artworksPieChart"></canvas>

            </div>
            <div class="col-md-8">
                <canvas id="categoryViewsBarChart"></canvas>

            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('artworksPieChart').getContext('2d');
        var artworksPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Artworks On Sale', 'Artworks Sold'],
                datasets: [{
                    label: 'Artworks Distribution',
                    data: [@json($totalArtworksOnSale), @json($totalArtworksSold)],
                    backgroundColor: [
                        'rgba(147, 56, 0, 1)',
                        'rgba(255, 187, 7, 1)'
                    ],
                    borderColor: [
                        'rgba(147, 56, 0, 1)',
                        'rgba(255, 187, 7, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: false,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Artworks Distribution'
                    }
                }
            },
        });

        var ctx = document.getElementById('categoryViewsBarChart').getContext('2d');
        var categoryViewsBarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json($categoryNames),
                datasets: [{
                    label: 'Total Views by Category',
                    data: @json($categoryViewsData),
                    backgroundColor: 'rgba(147, 56, 0, 1)',
                    borderColor: 'rgba(147, 56, 0, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: 'Total Views by Category'
                    }
                }
            },
        });
    </script>
</div>
@endsection