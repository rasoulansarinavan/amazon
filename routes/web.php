<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/*********** ADMIN PANEL *************/


Route::group(['prefix' => 'admin'
//    , 'middleware' => 'auth:admin'
], function () {
    Route::name('admin.')->group(function () {
        Route::get('/dashboard', \App\Http\Livewire\Admin\Dashboard\Index::class)->name('dashboard');
        Route::get('/category', \App\Http\Livewire\Admin\Category\Index::class)->name('category');
        Route::get('/category/create', \App\Http\Livewire\Admin\Category\Create::class)->name('category.create');

    });
});
/*********** ADMIN PANEL *************/
