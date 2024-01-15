<?php

use Illuminate\Support\Facades\Route;


Route::view("/", "welcome");
Route::view("/about", "about");
Route::view("/shop", "shop");
Route::view("/contact", "contact");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
