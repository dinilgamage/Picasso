<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Artwork;
use App\Models\Category;
use App\Models\OrderItem;
use App\Models\Rating;


class AdminController extends Controller
{
    public function index()
    {
            $totalUsersWithAdmin = User::count();
            $totalUsers = $totalUsersWithAdmin - 1;
            $totalCategories = Category::count();
            $totalArtworks = Artwork::where('sold', '!=', 1)->count();
            $totalOrders = OrderItem::count();
            $totalRatings = Rating::count();

            $totalArtworksListed = Artwork::count();
            $totalArtworksSold = Artwork::where('sold', 1)->count();      
            $totalArtworksOnSale = $totalArtworksListed - $totalArtworksSold;

            $totalProfileViews = User::sum('profile_views');
            $totalArtworkViews = Artwork::sum('views');


            $categoryNames = [];
            $categoryViewsData = [];
            $categoriesViews = Artwork::with('category')
                ->select('category_id', \DB::raw('sum(views) as total_views'))
                ->groupBy('category_id')
                ->get();
            foreach ($categoriesViews as $categoryView) {
                $categoryName = $categoryView->category ? $categoryView->category->name : 'Unknown';
                $categoryNames[] = $categoryName;
                $categoryViewsData[] = $categoryView->total_views;
            }

            return view('admin.dashboard', compact(
                'totalUsers', 
                'totalArtworks', 
                'totalCategories', 
                'totalOrders', 
                'totalRatings',
                'totalProfileViews',
                'totalArtworkViews',
                'totalArtworksSold',
                'totalArtworksOnSale',
                'totalArtworksListed',
                'categoryNames',
                'categoryViewsData',
                
                
            ));
        
    }

}
