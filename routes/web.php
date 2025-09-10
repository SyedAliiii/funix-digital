<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home\HomeController;

Route::view('/', 'home.index')->name('home');
Route::get('blog/{slug}', [HomeController::class, 'blogDetails'])->name('blog.details');

Route::view('contact', 'home.contact')->name('contact');
Route::post('contact/send', [HomeController::class, 'contactSend'])->name('contact.send');

Route::get('service/{slug}', [HomeController::class, 'serviceDetails'])->name('service.details');