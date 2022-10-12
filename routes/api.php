<?php

use App\Http\Controllers\API\MpesaController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::post('v1/access/token', 'PaymentController@generateAccessToken');
// Route::post('v1/cart/stk/push', 'PaymentController@customerMpesaSTKPush');

// mpesa controller
Route::post('v1/access/token', 'App\Http\Controllers\API\MpesaController@generateAccessToken');
Route::post('v1/cart/stk/push', 'App\Http\Controllers\API\MpesaController@STKpush');
