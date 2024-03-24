<?php

use App\Http\Controllers\Api\AddressController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\API\CallbackController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->group(function () {
    // get user and update
    Route::get('user', [AuthController::class, 'fetch']);
    Route::put('user', [AuthController::class, 'update']);

    // logout
    Route::post('logout', [AuthController::class, 'logout']);

    // adress apiresource
    Route::apiResource('address', AddressController::class);

    // order
    Route::post('order', [OrderController::class, 'order']);
});

// register
Route::post('register', [AuthController::class, 'register']);

// login
Route::post('login', [AuthController::class, 'login']);

//category
Route::get('categories', [CategoryController::class, 'index']);

//product
Route::get('products', [ProductController::class, 'index']);

// callback midtrans
Route::post('callback', [CallbackController::class, 'callback']);
