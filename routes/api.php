<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ItemsApiController;
use App\Http\Controllers\ItemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// login
Route::post('login', [AuthController::class, 'login']);
// register
Route::post('register', [AuthController::class, 'register']);
// logout
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
// items
Route::apiResource('items', ItemsApiController::class)->middleware('auth:sanctum');


// api resource product
// Route::apiResource('products', ProdukApiController::class)->middleware('auth:sanctum');
// // api resource order
// Route::apiResource('orders', OrderApiController::class)->middleware('auth:sanctum');
