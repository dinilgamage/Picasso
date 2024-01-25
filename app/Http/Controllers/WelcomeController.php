<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Artwork;
use App\Models\User;
use App\Models\Category;
//use db facade
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artworks = Artwork::with('user')->get();
        
        $highestRatedArtist = DB::table('users')
        ->join('ratings', 'users.id', '=', 'ratings.rated_id')
        ->selectRaw('users.*, AVG(ratings.rating) as avg_rating, COUNT(ratings.rating) as num_ratings')
        ->groupBy('users.id')
        ->havingRaw('COUNT(ratings.rating) > 0') 
        ->orderByDesc('avg_rating')
        ->orderByDesc('num_ratings')
        ->first();

        $latestArtworks = Artwork::with('user')->orderBy('created_at', 'desc')->take(4)->get();
        $mostPopularArtwork = Artwork::with('user')->orderBy('views', 'desc')->first();
        $mostViewedCategory = Category::withSum('artworks', 'views')
        ->with(['artworks' => function ($query) {
            $query->inRandomOrder()->take(2);
        }])
        ->orderByDesc('artworks_sum_views')
        ->first();



        return view('welcome', compact(
            'artworks',
            'highestRatedArtist',
            'latestArtworks',
            'mostPopularArtwork',
            'mostViewedCategory'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
