<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\checkinController;
use App\Http\Controllers\checkoutController;
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

Route::get ('/' ,[checkinController::class , 'index']);
Route::post ('/create' ,[checkinController::class , 'store'])->name('create');
Route::get ('/create-show' ,[checkoutController::class , 'index'])->name('home');