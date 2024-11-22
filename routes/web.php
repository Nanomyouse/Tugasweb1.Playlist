<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlaylistController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
    //return view('playlists');
//});

Route::get('/', [HomeController::class, 'dashboard']);
Route::get('/user', [HomeController::class, 'index'])->name('index');
Route::get('/create', [HomeController::class, 'create'])->name('user.create');
Route::post('/store', [HomeController::class, 'store'])->name('user.store');


//route resource for products
//Route::resource('/products', \App\Http\Controllers\ProductController::class);
//Route::resource('/playlists', \App\Http\Controllers\PlaylistController::class);



