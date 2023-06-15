<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class StoreApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stores = Store::all();
        return response()->json([
            'data' => $stores
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([ //validasi input
            'name' =>'required'
        ]);

        $store = Store::create($validatedData);

        return response()->json([
            'data' => $store
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Store $store)
    {
        return response()->json([
            'data' => $store
        ]);
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

        $store = Store::where('id', $store->id)->get();
        
        return response()->json([
            'data' => $store
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Store $store)
    {
        Product::where('store_id', $store->id)->delete();
        return response()->json([
            'message' => 'store deleted'
        ], 204);
    }
}
