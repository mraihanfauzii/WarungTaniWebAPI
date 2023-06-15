<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\CartDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::check()){
            $user = Auth::user();
            $usermodel = new User();
            $is_admin = $usermodel->is_admin($user);
            $TotalPrice = 0;
            $SelectedProducts = CartDetail::all()->where('user_id', Auth::id());
            foreach ($SelectedProducts as $SelectedProduct) {
                $TotalPrice += $SelectedProduct->quantity * $SelectedProduct->product->price;
            }
            return view('Keranjang', [
                'isLoggedIn' => Auth::check(),
                'user' => $user,
                'is_admin' => $is_admin,
                'SelectedProducts' => $SelectedProducts,
                'TotalPrice' => $TotalPrice
            ]);
        } else {
            return redirect('/login');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::check()){
            $validatedData = $request->validate([ //cek apakah inputannya valid 
                'user_id' =>'required',
                'product_id' => 'required',
                'quantity' => 'required'
            ]);

            if (count(CartDetail::where('user_id', $validatedData['user_id'])->where('product_id', $validatedData['product_id'])->get()) == 0) { //memastikan bahwa produk tersebut belum ada di cart sehingga tidak ada produk yang duplikat di cart.
                CartDetail::create($validatedData); //bikin entry data di database
            }

            if ($request->redirect_cart == 1) { //mengecek apakah user menekan tombol keranjang atau tombol order, jika user menekan tombol order akan diredirect ke keranjang secara otomatis.
                return redirect('/home/cart'); //redirect ke keranjang
            } else { //mengecek apakah user menekan tombol keranjang atau tombol order, jika user menekan tombol keranjang, maka produk akan ditambahkan ke keranjang dan user tetap berada di halaman produk.
                return back(); //user tetap berada di halaman produk
            }
            
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
    public function update(Request $request, CartDetail $cartDetail)
    {
        $validatedData = $request->validate([
            'quantity' => 'required',
        ]);
        if ($validatedData['quantity'] <= 0) { //jika quantity <= 0 maka produk akan dihapus dari keranjang
            CartDetail::destroy($cartDetail->id);
            return redirect('/home/cart');
        } else { //Jika quantity > 0 maka quantity dari produk yang ada di keranjang akan di update.
            CartDetail::where('id', $cartDetail->id)->update($validatedData);
            return redirect('/home/cart');  
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CartDetail $cartDetail)
    {
        CartDetail::destroy($cartDetail->id);
        return back();
    }
}
