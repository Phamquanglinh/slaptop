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

Route::get('/',[\App\Http\Controllers\IndexController::class,'getData'])->name('index');
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('frontend.contact');
Route::get('/about', function () {
    return view('frontend.about');
})->name('frontend.about');

Route::get('/faq', [\App\Http\Controllers\Frontend\FaqController::class, 'index'])->name('frontend.faq');
Route::get('/profile', [\App\Http\Controllers\Frontend\ProfileController::class, 'index'])->name('frontend.profile');
Route::post('/profile/update', [\App\Http\Controllers\Frontend\ProfileController::class, 'update'])->name('frontend.profile.update');
Route::post('/profile/changepassword', [\App\Http\Controllers\Frontend\ProfileController::class, 'changePassword'])->name('change.password.user');
Route::post('/profile/store', [\App\Http\Controllers\Frontend\ProfileController::class, 'store'])->name('frontend.profile.store');
Route::get('/cart', [\App\Http\Controllers\Frontend\CartController::class, 'index'])->middleware(\App\Http\Middleware\Authenticate::class)->name('cart.show');
Route::get('/category/{slug}/{page}', [\App\Http\Controllers\Frontend\FrontendCategoryController::class, 'getData', 'id','page'])->where(['slug','page'])->name('category');
Route::get('/tag/{slug}/{page}', [\App\Http\Controllers\Frontend\TagController::class, 'getData', 'id','page'])->where(['slug','page'])->name('tag');
Route::get('/brand/{slug}/{page}', [\App\Http\Controllers\Frontend\BrandController::class, 'getData', 'id','page'])->where(['slug','page'])->name('brand');
Route::get('/product/{slug}', [\App\Http\Controllers\Frontend\ProductController::class, 'getData', 'id'])->where(['slug'])->name('product');
Route::get('/cart/{method}/{id}', [\App\Http\Controllers\Frontend\CartController::class, 'ajax', 'method', 'id'])->where(['method', 'id'])->name('cart.ajax');
Route::get('/cart/{method}/{product_id}/{quantity}', [\App\Http\Controllers\Frontend\CartController::class, 'addToCart', 'method', 'product_id', 'quantity'])->where(['method', 'product_id', 'quantity'])->name('cart.add');
Route::get('/cart-remove/remove/{id}', [\App\Http\Controllers\Frontend\CartController::class, 'removeItem', 'id'])->where(['id'])->name('cart.remove');
Route::get('/search',[\App\Http\Controllers\Frontend\SearchController::class,'getData'])->name('search');
Route::get('/page/{key}', [\App\Http\Controllers\Frontend\FixedPageController::class, 'index','key'])->where(['key'])->name('frontend.page');
Route::get('order/history',[\App\Http\Controllers\Frontend\OrderController::class,'historyShow'])->name('order.history');
