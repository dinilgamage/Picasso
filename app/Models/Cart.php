<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function artwork()
    {
        return $this->belongsTo(Artwork::class);
    }
    public function artist()
    {
    return $this->belongsTo(User::class);
    }
}
