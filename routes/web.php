<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\RatingController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::group(['middleware' => ['auth', 'admin']], function() {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('/admin/users', UserController::class);
    Route::resource('/admin/categories', CategoryController::class);
});

Route::resource('artworks', ArtworkController::class)->middleware('auth');


Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');

Route::get('/profile/edit-contact', [ProfileController::class, 'editContact'])->name('profile.edit-contact')->middleware('auth');
Route::post('/profile/update-contact', [ProfileController::class, 'updateContact'])->name('profile.update-contact')->middleware('auth');
Route::get('/profile/analytics', [HomeController::class, 'analytics'])->name('analytics')->middleware('auth');

Route::get('/artists', [ArtistController::class, 'index'])->name('artists.index');
Route::get('/artists/{artist}', [ArtistController::class, 'show'])->name('artists.show');

Route::get('/arts', [ArtworkController::class, 'main'])->name('arts.main');
Route::get('/arts/{artwork}', [ArtworkController::class, 'show'])->name('arts.show');

Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/search/autocomplete', [SearchController::class, 'autocomplete'])->name('search.autocomplete');

Route::post('/arts/{artwork}/add-to-cart', [ArtworkController::class, 'addToCart'])->name('arts.add-to-cart')->middleware('auth');
Route::get('/cart', function () {
    return view('cart-component');
})->name('cart')->middleware('auth');

Route::post('/submit-rating', [RatingController::class, 'store'])->middleware('auth');
//command to make a controller named WelcomeContoller with reosrces 
// php artisan make:controller WelcomeController --resource 
