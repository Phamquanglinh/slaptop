<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::get('charts/weekly-users', 'Charts\WeeklyUsersChartController@response')->name('charts.weekly-users.index');
    Route::crud('category', 'CategoryCrudController');
    Route::crud('tags', 'TagsCrudController');
    Route::crud('product', 'ProductCrudController');
    Route::crud('customer', 'CustomerCrudController');
    Route::crud('order', 'OrderCrudController');
    Route::crud('brand', 'BrandCrudController');
    Route::crud('user', 'UserCrudController');
    Route::crud('faqs', 'FaqsCrudController');
    Route::crud('page', 'PageCrudController');
}); // this should be the absolute last line of this file