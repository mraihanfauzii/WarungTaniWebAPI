<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WishlistController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/home/cart', [CartController::class, 'index']);
Route::post('/home/cart/create', [CartController::class, 'store']);
Route::put('/home/cart/{cartDetail:id}/update', [CartController::class, 'update']);
Route::delete('/home/cart/{cartDetail:id}/delete', [CartController::class, 'destroy']);

Route::get('/home/order/checkout', [OrderController::class, 'index']);
Route::post('/home/order/create', [OrderController::class, 'store']);

Route::get('/home/profile', [ProfileController::class, 'index']);
Route::put('/home/profile/{user:id}/update', [ProfileController::class, 'update']);
Route::delete('/home/profile/{user:id}/delete', [ProfileController::class, 'destroy']);

Route::get('/home/admin', [AdminController::class, 'index']);

Route::get('/home/product/create', [ProductController::class, 'create']);
Route::post('/home/product/create', [ProductController::class, 'store']);
Route::get('/home/product/{product:id}', [ProductController::class, 'show']);
Route::get('/home/product/{product:id}/edit', [ProductController::class, 'edit']);
Route::put('/home/product/{product:id}/update', [ProductController::class, 'update']);
Route::delete('/home/product/{product:id}/delete', [ProductController::class, 'destroy']);

Route::post('/home/product/wishlist/create', [WishlistController::class, 'store']);

Route::get('/home/store/create', [StoreController::class, 'create']);
Route::post('/home/store/create', [StoreController::class, 'store']);
Route::get('/home/store/{store:id}/edit', [StoreController::class, 'edit']);
Route::put('/home/store/{store:id}/edit', [StoreController::class, 'update']);
Route::get('/home/store/{store:id}', [StoreController::class, 'show']);
Route::delete('/home/store/{store:id}/delete', [StoreController::class, 'destroy']);







