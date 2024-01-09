<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Artwork;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{

    public function index()
    {
        $userId = Auth::id(); 
        $wishlistItems = Wishlist::with('artwork') 
                                ->where('user_id', $userId)
                                ->get();

        return view('wishlist.index', ['wishlistItems' => $wishlistItems]);
    }
    public function addToWishlist(Artwork $artwork)
    {
        $existingWishlistItem = Wishlist::where('user_id', Auth::id())
                                        ->where('artwork_id', $artwork->id)
                                        ->first();

        if ($existingWishlistItem) {
            return back()->with('error', 'This item is already in your wishlist.');
        }

        Wishlist::create([
            'user_id' => Auth::id(),
            'artwork_id' => $artwork->id,
        ]);

        return back()->with('success', 'Artwork added to wishlist successfully.');
    }

    public function removeFromWishlist($wishlistId)
    {
        Wishlist::destroy($wishlistId);
        return back()->with('success', 'Artwork removed from wishlist successfully.');
    }
    
    public function clearWishlist()
    {
        $userId = Auth::id();
        Wishlist::where('user_id', $userId)->delete();
        return back()->with('success', 'Your wishlist has been cleared.');
    }
}
