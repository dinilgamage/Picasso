<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class ArtistController extends Controller
{
    public function index()
    {
        //get artist where role===0

        $artists = User::where('role', 0 )->get(); 

        return view('artists.index', ['artists' => $artists]);
    }
    
    public function show(User $artist)
    {
        return view('artists.show', ['artist' => $artist]);
    }
}
