<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $isLoggedIn = Auth::check();
        
        if($isLoggedIn == false){ //jika user belum login, maka akan diredirect ke halaman login
            return redirect()->intended('/login');
        }
        $user = Auth::user();
        $usermodel = new User();
        $is_admin = $usermodel->is_admin($user); //mengecek apakah user seorang admin
        $LatestOrders = Order::latest()->where('user_id', $user->id)->take(3)->get();
        
        if ($isLoggedIn) {
            return view('Profil', [
                'isLoggedIn' => $isLoggedIn,
                'user' => $user,
                'is_admin' => $is_admin,
                'LatestOrders' => $LatestOrders,
                'Wishlists' => Wishlist::all()->where('user_id' , $user->id)
            ]);
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
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([ //validasi inputan
            'name' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required|min:6|max:255'
        ]);

        if ($validatedData['password'] != $request['confirm_password']) //validasi password
        {
            return back();
        }

        $validatedData['password'] = bcrypt($validatedData['password']); //enkripsi password

        User::where('id', $user->id)->update($validatedData); //update user nya
        return redirect('/home/profile');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Auth::logout();
        User::destroy($user->id);
        return redirect('/login');
    }
}
