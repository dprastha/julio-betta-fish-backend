<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('fish', [\App\Http\Controllers\API\FishController::class, 'all']);
Route::get('transactions/{id}', [\App\Http\Controllers\API\TransactionController::class, 'get']);
Route::post('checkout', [\App\Http\Controllers\API\CheckoutController::class, 'checkout']);
