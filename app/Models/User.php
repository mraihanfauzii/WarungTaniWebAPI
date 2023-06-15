<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Order;
use App\Models\Wishlist;
use App\Models\CartDetail;
use App\Models\ProductReview;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = ['id'];
    
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    

    public function product_reviews()
    {
        return $this->hasMany(ProductReview::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function cart_details()
    {
        return $this->hasMany(CartDetail::class);
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function is_admin($user){
        if($user != null){ //cek apakah user sudah login
            if($user->is_admin){ //jika user sudah login, cek apakah user seorang admin
                return true; //jika seorang admin, maka return true
            }
            return false;
        } else {
            return false;
        }
    }
}
