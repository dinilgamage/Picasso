<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); //makes sure a user is logged in before returning the view for home screen
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function analytics()
    {
        $userId = auth()->id();
        $user = User::with(['ratings', 'artworks' => function ($query) {
            $query->with('category');
        }])->find($userId);

        $totalRatings = $user->ratings->count(); 
        $averageRating = $user->ratings->avg('rating'); 
        $totalArtworkViews = $user->artworks->sum('views'); 
        $averageArtworkView = $user->artworks->count() > 0 ? $totalArtworkViews / $user->artworks->count() : 0; 

        $artworks = $user->artworks;
        $soldArtworks = $artworks->where('sold', 1);
        $totalArtworksSold = $soldArtworks->count();
        $totalRevenue = $soldArtworks->sum('price');

        $bestPerformingArtwork = $artworks->sortByDesc('views')->first();
        $categoryViews = $artworks->groupBy('category.name')->map(function ($item, $key) {
            return $item->sum('views');
        });
        $bestPerformingCategory = $categoryViews->sortKeysDesc()->keys()->first();
        $bestPerformingCategoryViews = $categoryViews[$bestPerformingCategory];

        return view('profile.analytics', [
            'user' => $user,
            'totalRatings' => $totalRatings,
            'averageRating' => $averageRating,
            'totalArtworkViews' => $totalArtworkViews,
            'averageArtworkView' => $averageArtworkView,
            'totalArtworksSold' => $totalArtworksSold,
            'totalRevenue' => $totalRevenue,
            'bestPerformingArtwork' => $bestPerformingArtwork,
            'bestPerformingCategory' => $bestPerformingCategory,
            'bestPerformingCategoryViews' => $bestPerformingCategoryViews,
        ]);
    }
}