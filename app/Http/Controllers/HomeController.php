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
        $this->middleware('auth'); //makes sure a user is logged in before returing the view for home screen
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
        $user = User::with('ratings', 'artworks')->find($userId);
        $totalRatings = $user->ratings->count(); 
        $averageRating = $user->ratings->avg('rating'); 
        $totalArtworkViews = $user->artworks->sum('views'); 
        $averageArtworkView = $user->artworks->count() > 0 ? $totalArtworkViews / $user->artworks->count() : 0; 

        return view('profile.analytics', [
            'user' => $user,
            'totalRatings' => $totalRatings,
            'averageRating' => $averageRating,
            'totalArtworkViews' => $totalArtworkViews,
            'averageArtworkView' => $averageArtworkView
        ]);
    }
}
