<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sukien1Controller;
use App\Http\Controllers\PaymentController;



Route::redirect('/', '/home');

Route::get('/home', [HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/event', [App\Http\Controllers\EventController::class, 'index'])->name('event');

Route::get('/app', [App\Http\Controllers\AppController::class, 'index'])->name('app');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');

Route::get('/sukien1', [App\Http\Controllers\Sukien1Controller::class, 'index'])->name('sukien1');

Route::get('/sukien2', [App\Http\Controllers\Sukien2Controller::class, 'index'])->name('sukien2');

Route::get('/sukien3', [App\Http\Controllers\Sukien3Controller::class, 'index'])->name('sukien3');

Route::get('/sukien4', [App\Http\Controllers\Sukien4Controller::class, 'index'])->name('sukien4');

Route::get('/payment', [App\Http\Controllers\PaymentController::class, 'index'])->name('payment');

Route::get('/success', [App\Http\Controllers\SuccessController::class, 'index'])->name('success');