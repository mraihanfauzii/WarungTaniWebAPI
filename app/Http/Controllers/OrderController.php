<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\CartDetail;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $usermodel = new User();
        $is_admin = $usermodel->is_admin($user);
        return view('SuccessPayment', [
            'isLoggedIn' => Auth::check(),
            'user' => Auth::user(),
            'is_admin' => $is_admin
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
        if(Auth::check()) {
            $Products = CartDetail::where('user_id', $request->user_id)->get();
            $Order = Order::create(['user_id' => $request->user_id]);
            // $Order = Order::latest()->where('user_id', $request->user_id)->take(1)->get();

            foreach ($Products as $Product){
                OrderDetail::create([
                    'order_id' => $Order->id,
                    'product_id' => $Product->product_id,
                    'quantity' => $Product->quantity
                ]);
                CartDetail::destroy($Product->id);
            }
            return redirect('/home/order/checkout');
        } else {
            return redirect('/login');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
