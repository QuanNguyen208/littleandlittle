<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::redirect('/', '/home');

Route::get('/home', [HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/event', [App\Http\Controllers\EventController::class, 'index'])->name('event');

Route::get('/app', [App\Http\Controllers\AppController::class, 'index'])->name('app');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');