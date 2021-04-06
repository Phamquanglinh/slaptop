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
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('frontend.contact');
Route::get('/about', function () {
    return view('frontend.about');
})->name('frontend.about');

Route::get('/faq', function () {
    return view('frontend.faq');
})->name('frontend.faq');
Route::get('/cart', function () {
    return view('frontend.cart');
})->name('frontend.cart');
Route::get('/category/{slug}', [\App\Http\Controllers\Frontend\FrontendCategoryController::class, 'getData', 'id'])->where(['slug'])->name('category');
Route::get('/tag/{slug}', [\App\Http\Controllers\Frontend\TagController::class, 'getData', 'id'])->where(['slug'])->name('tag');

Route::get('/brand/{slug}', [\App\Http\Controllers\Frontend\BrandController::class, 'getData', 'id'])->where(['slug'])->name('brand');
Route::get('/product/{slug}', [\App\Http\Controllers\Frontend\ProductController::class, 'getData', 'id'])->where(['slug'])->name('product');
