<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Store;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $usermodel = new User();
        $is_admin = $usermodel->is_admin($user);
        
        // if($user != null){
            
        //     return "MASUK TRUEEE";
        //     $is_admin = true;
        // } else {
        //     $is_admin = false;
        // }
        
        return view('Home', [
            'isLoggedIn' => Auth::check(),
            'user' => $user,
            'is_admin' => $is_admin,
            'Products' => Product::all()->take(9),
            'Stores' => Store::all()
        ]);
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
        //
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
