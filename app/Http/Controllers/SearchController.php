<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artwork;
use App\Models\User;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        $artworks = Artwork::where('title', 'LIKE', "%{$query}%")
            ->orWhere('desc', 'LIKE', "%{$query}%")
            ->orWhere('material', 'LIKE', "%{$query}%")
            ->orWhereHas('category', function ($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%");
            })
            ->orWhereHas('user', function ($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%");
            })
            ->get();

        $artists = User::where('name', 'LIKE', "%{$query}%")->get();

        return view('search_results', compact('artworks', 'artists', 'query'));
    }

    public function autocomplete(Request $request)
    {
        $search = $request->get('term');

        $artworks = Artwork::where('title', 'LIKE', '%'.$search.'%')
        ->orWhere('desc', 'LIKE', '%'.$search.'%')
        ->orWhere('material', 'LIKE', "%{$search}%")
        ->orWhereHas('category', function ($q) use ($search) {
            $q->where('name', 'LIKE', "%{$search}%");
        })->get();
        $artists = User::where('name', 'LIKE', '%'.$search.'%')->get();

        $results = $artworks->concat($artists)->map(function ($item) {
            return [
                'label' => $item instanceof Artwork ? $item->title : $item->name,
                'value' => $item instanceof Artwork ? $item->title : $item->name,
                'url' => $item instanceof Artwork ? route('arts.show', $item) : route('artists.show', $item),
            ];
        });

        return response()->json($results);
    }
}
