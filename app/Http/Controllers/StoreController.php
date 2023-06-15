<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Store;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $isLoggedIn = Auth::check();
        if($isLoggedIn == false){
            return redirect('/login');
        }
        $user = Auth::user();
        $usermodel = new User();
        $is_admin = $usermodel->is_admin($user);
        if ($is_admin) {
            return view('TambahGudang', [
                'isLoggedIn' => $isLoggedIn,
                'user' => $user,
                'is_admin' => $is_admin
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
        $is_admin = $usermodel->is_admin($user); //validasi apakah admin yang sedang login
        if (Auth::check() && $is_admin){

            $validatedData = $request->validate([ //validasi input
                'name' =>'required'
            ]);

            Store::create($validatedData);
            return redirect('/home'); //redirect ke keranjang
        } else {
            return redirect('/login');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Store $store)
    {
        $user = Auth::user();
        $usermodel = new User();
        $is_admin = $usermodel->is_admin($user);
        return view('Gudang', [
            'isLoggedIn' => Auth::check(),
            'user' => Auth::user(),
            'is_admin' => $is_admin,
            'Store' => $store,
            'Products' => Product::all()->where('store_id', '=' , $store->id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Store $store)
    {
        $isLoggedIn = Auth::check();
        $user = Auth::user();
        $usermodel = new User();
        $is_admin = $usermodel->is_admin($user);
        if ($isLoggedIn && $is_admin){
            return view('EditGudang', [
                'isLoggedIn' => $isLoggedIn,
                'user' => $user,
                'is_admin' => $is_admin,
                'Store' => $store,
                'Products' => Product::all()->where('store_id', '=' , $store->id)
            ]);
        }else {
            return redirect('/home');
        }
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Store $store)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);
        Store::where('id', $store->id)->update($validatedData);
        return redirect('/home/store/'.$store->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Store $store)
    {
        Store::destroy($store->id);
        Product::where('store_id', $store->id)->delete();
        return redirect('/home');
    }
}
