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
        return view('artists.index', ['artists' => $artists]);
    }
    
    public function show(User $artist)
    {
        $userId = auth()->id();

        // Check if the user is authenticated and not viewing their own profile
        if ($userId && $userId !== $artist->id) {
            $artistId = $artist->id;
            $cacheKey = "user_{$userId}_artist_{$artistId}_view";

            // Check if the user has viewed this artist in the last 24 hours
            if (!Cache::has($cacheKey)) {
                // Increment the profile views
                $artist->increment('profile_views');

                // Store the current timestamp in the cache for 24 hours
                Cache::put($cacheKey, now(), 60 * 24);
            }
        }

        return view('artists.show', ['artist' => $artist]);
    }

}
