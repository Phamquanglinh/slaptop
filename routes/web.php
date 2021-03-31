<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActiveFormController;
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

Route::get('/contact-test',function (){
    return view('frontend.contact-test');
})->name('frontend.contact-test');
