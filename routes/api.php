<?php

use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\CouponsController;
use App\Http\Controllers\Api\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('api')->group(function () {
    Route::resource('products', ProductsController::class);
    Route::resource('coupons', CouponsController::class);
    Route::get('cart', [CartController::class, 'cart']);
    Route::post('change_cart', [CartController::class, 'change_cart']);
    Route::post('apply_coupon', [CartController::class, 'apply_coupon']);
    Route::post('remove_coupon/{cart_coupon}', [CartController::class, 'remove_coupon']);
});
