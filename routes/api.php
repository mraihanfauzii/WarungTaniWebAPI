<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartApiController;
use App\Http\Controllers\OrderApiController;
use App\Http\Controllers\StoreApiController;
use App\Http\Controllers\ProductApiController;
use App\Http\Controllers\CartDetailApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('store', StoreApiController::class);
Route::apiResource('product', ProductApiController::class);
Route::apiResource('order', OrderApiController::class);
Route::apiResource('cartDetail', CartApiController::class);