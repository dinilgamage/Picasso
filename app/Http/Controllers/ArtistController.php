<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\User;


class ArtistController extends Controller
{
    public function index()
    {
        $artists = User::where('role', 0)->where('id', '!=', auth()->id())->get();
        $artists->load('ratings');

        foreach ($artists as $artist) {
            $artist->averageRating = $artist->ratings->avg('rating');
        }
        return view('artists.index', ['artists' => $artists]);
    }
    
    public function show(User $artist)
    {
        $userId = auth()->id();
        $artist->load([ 'ratings', 'artworks']); 
        $artist->averageRating = $artist->ratings->avg('rating'); 

        if ($userId && $userId !== $artist->id) {
            $artistId = $artist->id;
            $cacheKey = "user_{$userId}_artist_{$artistId}_view";

            if (!Cache::has($cacheKey)) {
                $artist->increment('profile_views');

                Cache::put($cacheKey, now(), 60 * 24);
            }
        }

        return view('artists.show', ['artist' => $artist, 'artworks' => $artist->artworks]);
    }

}
