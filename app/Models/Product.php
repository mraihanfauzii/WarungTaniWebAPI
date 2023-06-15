<?php

namespace App\Models;

use App\Models\Store;
use App\Models\CartDetail;
use App\Models\OrderDetail;
use App\Models\ProductReview;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function order_details()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function product_reviews()
    {
        return $this->hasMany(ProductReview::class);
    }

    public function cart_details()
    {
        return $this->hasMany(CartDetail::class);
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }
}
