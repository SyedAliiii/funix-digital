<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home\HomeController;

Route::view('/', 'home.index')->name('home');
Route::get('blog/{slug}', [HomeController::class, 'blogDetails'])->name('blog.details');