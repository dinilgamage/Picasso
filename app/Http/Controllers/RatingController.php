<?php

// app/Http/Controllers/RatingController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    
    public function store(Request $request)
    {
        $data = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'rated_id' => 'required|integer|exists:users,id',
        ]);

        // Check if the user has already rated this artist
        $existingRating = Rating::where('rater_id', Auth::id())
                                     ->where('rated_id', $data['rated_id'])
                                     ->first();

        if ($existingRating) {
            // Update the existing rating
            $existingRating->update(['rating' => $data['rating']]);
        } else {
            // Create a new rating
            Rating::create([
                'rater_id' => Auth::id(),
                'rated_id' => $data['rated_id'],
                'rating' => $data['rating'],
            ]);
        }

        return response()->json(['message' => 'Rating submitted successfully!'], 200);
    }
}