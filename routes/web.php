<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
})->name('index');
Route::get('/contact',function (){
    return view('frontend.contact');
})->name('frontend.contact');
Route::get('/about',function (){
    return view('frontend.about');
})->name('frontend.about');
Route::get('/product/{slug}',[\App\Http\Controllers\Frontend\ProductController::class,'index','id'])->where(['slug'])->name('product');
Route::get('/list', function (){
    return view('frontend.list');
})->name('frontend.list');
