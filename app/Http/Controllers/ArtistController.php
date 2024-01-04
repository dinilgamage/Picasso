<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $artist->increment('profile_views'); 
        return view('artists.show', ['artist' => $artist]);
    }
}
