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
Route::post('order',[\App\Http\Controllers\Frontend\OrderController::class,'save'])->name('save.order');
Route::get('order/{id}/show',[\App\Http\Controllers\Frontend\OrderController::class,'show','id'])->where(['id'])->name('show.order');
Route::get('order/history',[\App\Http\Controllers\Frontend\OrderController::class,'historyShow'])->name('order.history');

