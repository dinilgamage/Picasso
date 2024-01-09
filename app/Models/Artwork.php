<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'artist_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function wishlistedByUsers()
    {
        return $this->hasMany(Wishlist::class);
    }
    protected $fillable = [
        'title',
        'desc',
        'image',
        'category_id',
        'price',
        'sold',
        'artist_id',
        'material',
        'size',
        'frame',
        'signature',
        
    ];


}
