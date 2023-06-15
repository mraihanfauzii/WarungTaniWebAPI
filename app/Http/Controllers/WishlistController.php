<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    // view -> web -> controller
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::check()){
            $validatedData = $request->validate([ //validasi inputan
                'user_id' =>'required',
                'product_id' => 'required'
            ]);
            if (count(Wishlist::where('user_id', $validatedData['user_id'])->where('product_id', $validatedData['product_id'])->get()) == 0) { //memastikan bahwa produk tersebut belum ada di cart sehingga tidak ada produk yang duplikat di cart.
                Wishlist::create($validatedData); //Kalo belum ada di wishlist, maka di create ke dalam database
            } else {
                Wishlist::where('user_id', $validatedData['user_id'])->where('product_id', $validatedData['product_id'])->delete(); //kalo dah ada, di delete
            }
            return back(); //redirect ke keranjang
        } else {
            return redirect('/login');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
