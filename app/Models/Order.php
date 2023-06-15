<?php

namespace App\Models;

use App\Models\User;
use App\Models\OrderDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order_details()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function order($products, $order_id){
        foreach ($products as $product){
            OrderDetail::create([
                'order_id' => $order_id,
                'product_id' => $product->product_id,
                'quantity' => $product->quantity
            ]);
            CartDetail::destroy($product->id);
        }
    }
}
