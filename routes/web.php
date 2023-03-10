<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\MainController::class,'home'])->name('home');
Route::get('/contact', [\App\Http\Controllers\IndexController::class,'showContactForm'])->name('contact');
Route::post('/contact_form_process', [\App\Http\Controllers\IndexController::class,'contactForm'])->name('contact_form_process');


