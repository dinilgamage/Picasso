<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artwork;
use App\Models\Order;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'artwork_id',
        'price',
    ];


    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function artwork()
    {
        return $this->belongsTo(Artwork::class);
    }

}
