<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\CartDetail;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $CartDetails = CartDetail::all();
        return response()->json([
            'data' => $CartDetails
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([ //cek apakah inputannya valid 
            'user_id' =>'required',
            'product_id' => 'required',
            'quantity' => 'required'
        ]);

        if (count(CartDetail::where('user_id', $validatedData['user_id'])->where('product_id', $validatedData['product_id'])->get()) == 0) { //memastikan bahwa produk tersebut belum ada di cart sehingga tidak ada produk yang duplikat di cart.
            $CartDetail = CartDetail::create($validatedData); //bikin entry data di database
        }

        return response()->json([
            'data' => $CartDetail
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(CartDetail $cartDetail)
    {
        return response()->json([
            'data' => $cartDetail
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CartDetail $cartDetail)
    {
        $validatedData = $request->validate([
            'quantity' => 'required',
        ]);
        $message = "";
        if ($validatedData['quantity'] <= 0) { //jika quantity <= 0 maka produk akan dihapus dari keranjang
            CartDetail::destroy($cartDetail->id);
            $message = "Cart deleted";
        } else { //Jika quantity > 0 maka quantity dari produk yang ada di keranjang akan di update.
            CartDetail::where('id', $cartDetail->id)->update($validatedData);
            $message = "Cart updated";
        }

        return response()->json([
            'message' => $message
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CartDetail $cartDetail)
    {
        Product::where('store_id', $cartDetail->id)->delete();
        return response()->json([
            'message' => 'store deleted'
        ], 204);
    }
}
