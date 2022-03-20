<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\WatchController;
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

Route::post('/signup', [SignupController::class, 'store'])->name('signup');
Route::post('/login', [LoginController::class, 'index'])->name('login');
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');


Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::get('/home/{page?}', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/watch/{media_type}/{id}', [WatchController::class, 'index'])->name('watch')->middleware('auth');
