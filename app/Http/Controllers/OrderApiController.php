<?php

namespace App\Http\Controllers;

use stdClass;
use App\Models\Order;
use App\Models\CartDetail;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orderdetails = OrderDetail::all();
        $orders = Order::all();

        $response = [
            'orders' => $orders,
            'orderdetails' => $orderdetails
        ];


        return response()->json([
            'data' => $response
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([ //validasi input
            'user_id' =>'required'
        ]);

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

        $OrderDetails = OrderDetail::all()->where('order_id', $Order->id);

        $response = [
            'order' => $Order,
            'orderdetail' => $OrderDetails
        ];

        return response()->json([
            'data' => $response
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $orderdetails = OrderDetail::all()->where('order_id', $order->id);
        $response = [
            'order' => $order,
            'orderdetail' => $orderdetails
        ];

        return response()->json([
            'data' => $response
        ]);
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
