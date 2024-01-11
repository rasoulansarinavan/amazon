<?php

use App\Http\Livewire\Admin\Dashboard\Index;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


/*********** ADMIN PANEL *************/


Route::group(['prefix' => 'admin'
//    , 'middleware' => 'auth:admin'
], function () {
    Route::name('admin.')->group(function () {
        Route::get('/dashboard', Index::class)->name('dashboard');
        Route::get('/category', \App\Http\Livewire\Admin\Category\Index::class)->name('category');
        Route::get('/category/create', \App\Http\Livewire\Admin\Category\Create::class)->name('category.create');
        Route::get('/category/feature/{category_id}', \App\Http\Livewire\Admin\Category\Feature::class)->name('category.feature');
        Route::get('/product', \App\Http\Livewire\Admin\Product\Index::class)->name('product');
        Route::get('/product/create', \App\Http\Livewire\Admin\Product\Create::class)->name('product.create');

    });
});


/*********** ADMIN PANEL *************/
