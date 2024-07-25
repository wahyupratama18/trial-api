<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Auth\ApiLoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// login
Route::post('login', ApiLoginController::class)->name('login')->middleware('guest');

Route::middleware('auth:sanctum')->group(function () {
    // dapatkan user
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // handle api kategori
    Route::apiResource('categories', CategoryController::class);

    // handle api produk
    Route::apiResource('products', ProductController::class);
});
