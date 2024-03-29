<?php

declare(strict_types=1);

use App\Http\Livewire\Admin\Dashboard\Index;

//use App\Http\Livewire\Admin\Auth\LoginRegister;
use Illuminate\Support\Facades\Route;


Route::get('/', \App\Http\Livewire\Client\Home\Index::class)->name('client.home');

//Route::namespace('Auth')->group(function () {
//Route::get('login-register', LoginRegister::class)->name('login-register-form');
//});


/*********** ADMIN PANEL *************/

Route::group(['prefix' => 'admin'
    //    , 'middleware' => 'auth:admin'
], function () {
    Route::name('admin.')->group(function () {
        Route::get('/dashboard', Index::class)->name('dashboard');
        Route::get('/category', \App\Http\Livewire\Admin\Category\Index::class)->name('category');
        Route::get('/category/create', \App\Http\Livewire\Admin\Category\Create::class)->name('category.create');
        Route::get('/category/feature/{id}', \App\Http\Livewire\Admin\Category\Feature::class)->name('category.feature');
        Route::get('/product', \App\Http\Livewire\Admin\Product\Index::class)->name('product');
        Route::get('/product/create', \App\Http\Livewire\Admin\Product\Create::class)->name('product.create');
        Route::get('/brand', \App\Http\Livewire\Admin\Brand\Index::class)->name('brand');
        Route::get('/delivery', \App\Http\Livewire\Admin\Delivery\Index::class)->name('delivery');
        Route::get('/order', \App\Http\Livewire\Admin\Order\Index::class)->name('order');
        Route::get('/users', \App\Http\Livewire\Admin\User\Index::class)->name('users');
        Route::get('/admins', \App\Http\Livewire\Admin\User\Admins::class)->name('users.admins');
        Route::get('/store', \App\Http\Livewire\Admin\Store\Index::class)->name('store');
        Route::get('/store/edit/{id}', \App\Http\Livewire\Admin\Store\Edit::class)->name('store.edit');
        Route::get('/comments', \App\Http\Livewire\Admin\Comment\Index::class)->name('comments');
        Route::get('/comments/answer/{id}', \App\Http\Livewire\Admin\Comment\Answer::class)->name('comments.answer');
        Route::get('/comments/edit/{id}', \App\Http\Livewire\Admin\Comment\Edit::class)->name('comments.edit');
        Route::get('/discount/common', \App\Http\Livewire\Admin\Discount\Common::class)->name('discount.common');
        Route::get('/discount/coupon', \App\Http\Livewire\Admin\Discount\Coupon::class)->name('discount.coupon');
        Route::get('/banner', \App\Http\Livewire\Admin\Banner\Index::class)->name('banner');
        Route::get('/slider', \App\Http\Livewire\Admin\Slider\Index::class)->name('slider');
        Route::get('/banner/second', \App\Http\Livewire\Admin\Banner\Second::class)->name('banner.second');

    });
});


/*********** ADMIN PANEL *************/
