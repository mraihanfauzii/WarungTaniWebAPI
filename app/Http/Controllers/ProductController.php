<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
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
    public function create(Request $request)
    {
        $isLoggedIn = Auth::check();
        if($isLoggedIn == false){
            return redirect('/login');
        }
        $user = Auth::user();
        $usermodel = new User();
        $is_admin = $usermodel->is_admin($user);
        if ($is_admin) {
            $validatedData = $request->validate([
                'store_id' =>'required'
            ]);
            return view('TambahProduk', [
                'isLoggedIn' => $isLoggedIn,
                'user' => $user,
                'is_admin' => $is_admin,
                'Store_id' => $validatedData['store_id']
            ]);
        } else {
            return redirect('/home');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $usermodel = new User();
        $is_admin = $usermodel->is_admin($user);
        if (Auth::check() && $is_admin){
            $validatedData = $request->validate([
                'store_id' =>'required',
                'name' =>'required',
                'price' =>'required',
                'image_link' =>'required',
                'description' =>'required'
            ]);
            // $request->validate(['image' =>'required']);
            // $path = $request->file('image')->store('public/images/products');
            // $url = Storage::url($path);
            // $validatedData['image_link'] = $url;
            Product::create($validatedData);
            return redirect('/home'); //redirect ke keranjang
        } else {
            return redirect('/home');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // return Product::where('id' , $product->id)->withCount('product_reviews')->get();
        $user = Auth::user();
        $usermodel = new User();
        $is_admin = $usermodel->is_admin($user);
        if(Auth::check()){
            return view('Produk', [
                'isLoggedIn' => Auth::check(),
                'user' => Auth::user(),
                'is_admin' => $is_admin,
                'Product' => Product::where('id' , $product->id)->withCount('product_reviews')->get()
            ]);
        } else {
            return redirect('/login');
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $user = Auth::user();
        $usermodel = new User();
        $is_admin = $usermodel->is_admin($user);
        if(Auth::check() && $is_admin){
            return view('EditProduk', [
                'isLoggedIn' => Auth::check(),
                'user' => Auth::user(),
                'is_admin' => $is_admin,
                'Product' => $product
            ]);
        } else {
            return redirect('/home');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        
        $user = Auth::user();
        $usermodel = new User();
        $is_admin = $usermodel->is_admin($user);
        if (Auth::check() && $is_admin){
            $validatedData = $request->validate([
                'name' =>'required',
                'price' =>'required',
                'description' =>'required'
            ]);
            $request->validate(['image' =>'required']);
            $path = $request->file('image')->store('public/images/products');
            $url = Storage::url($path);
            $validatedData['image_link'] = $url;
            Product::where('id', $product->id)->update($validatedData);
            return redirect('/home/product/'.$product->id); //redirect ke keranjang
        } else {
            return redirect('/home');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $user = Auth::user();
        $usermodel = new User();
        $is_admin = $usermodel->is_admin($user);
        if(Auth::check() && $is_admin){
            $store_id = $product->store_id;
            Product::destroy($product->id);
            return redirect('/home/store/'.$store_id);
        } else {
            return redirect('/home');
        }
    }
}
