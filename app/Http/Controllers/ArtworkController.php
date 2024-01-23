<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\User;
use App\Models\Artwork;
use App\Models\Cart;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;



class ArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->role === 1) {
            $artworks = Artwork::with('user', 'category')->get();
        } else {
            $artworks = Artwork::with('user', 'category')->where('artist_id', Auth::id())->get();
        }
    
        return view('artworks.index', compact('artworks'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
    return view('artworks.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'desc' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric',
            'sold' => 'required|boolean',
            'material' => 'max:255',
            'size' => 'max:255',
            'signature' => 'max:255',
        ]);
    
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
    
        $artwork = new Artwork;
        $artwork->artist_id = auth()->id();
        $artwork->title = $request->title;
        $artwork->desc = $request->desc;
        $artwork->image = $imageName;
        $artwork->category_id = $request->category_id;
        $artwork->price = $request->price;
        $artwork->material = $request->material;
        $artwork->size = $request->size;
        $artwork->frame = $request->frame;
        $artwork->signature = $request->signature;
        $artwork->sold = $request->sold;
        $artwork->save();
    
        return redirect()->route('artworks.index')->with('success', 'Artwork created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artwork $artwork)
    {
        $userId = auth()->id();

        if ($userId && $userId !== $artwork->artist_id) {
            $artworkId = $artwork->id;
            $cacheKey = "user_{$userId}_artwork_{$artworkId}_view";

            if (!Cache::has($cacheKey)) {
                $artwork->increment('views');

                Cache::put($cacheKey, now(), 60 * 24);
            }
        }

        return view('arts.show', compact('artwork'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artwork $artwork)
    {
        $this->authorize('update', $artwork);
        $categories = Category::all();
        return view('artworks.edit', compact('artwork', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artwork $artwork)
    {
        $this->authorize('update', $artwork);

        $request->validate([
            'title' => 'required|max:255',
            'desc' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric',
            'sold' => 'required|boolean',
            'material' => 'max:255',
            'size' => 'max:255',
            'signature' => 'max:255',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
            $artwork->image = $imageName;
        }

        $artwork->title = $request->title;
        $artwork->desc = $request->desc;
        $artwork->category_id = $request->category_id;
        $artwork->price = $request->price;
        $artwork->material = $request->material;
        $artwork->size = $request->size;
        $artwork->frame = $request->frame;
        $artwork->signature = $request->signature;
        $artwork->sold = $request->sold;
        $artwork->save();

        return redirect()->route('artworks.index')->with('success', 'Artwork updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artwork $artwork)
    {
        $this->authorize('delete', $artwork);

        if (file_exists(public_path('images/' . $artwork->image))) {
            unlink(public_path('images/' . $artwork->image));
        }

        $artwork->delete();

        return redirect()->route('artworks.index')->with('success', 'Artwork deleted successfully!');
    }

    public function main(Request $request)
    {
        $query = Artwork::with('user', 'category');

        if ($request->has('category_id') && $request->category_id != '') {
            $query->where('category_id', $request->category_id);
        }

        $artworks = $query->get();

        $categories = Category::all();
        return view('arts.index', compact('artworks', 'categories'));
    }

    public function addToCart(Request $request, Artwork $artwork)
    {
        $existingCartItem = Cart::where('user_id', Auth::id())
                                ->where('artwork_id', $artwork->id)
                                ->first();

        if ($existingCartItem) {
            return back()->with('error', 'Item is already in your cart.');
        } else {
            $cartItem = new Cart();
            $cartItem->user_id = Auth::id();
            $cartItem->artwork_id = $artwork->id;
            $cartItem->save();

            return back()->with('success', 'Artwork added to cart!!');
        }
    }
}
