<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\WatchController;
use Illuminate\Support\Facades\Route;

Route::post('/signup', [SignupController::class, 'store'])->name('signup');
Route::post('/login', [LoginController::class, 'index'])->name('login');
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::get('/', [LandingController::class, 'index'])->name('landing');


Route::get('/home/{page?}', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/watch/{media_type}/{id}', [WatchController::class, 'index'])->name('watch')->middleware('auth');

Route::get('/series', [SeriesController::class, 'index'])->name('series')->middleware('auth');

Route::get('/movies', [MoviesController::class, 'index'])->name('movies')->middleware('auth');

Route::get('/search', [SearchController::class, 'index'])->name('search')->middleware('auth');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');
Route::put('/profile', [ProfileController::class, 'update'])->name('updateProfile')->middleware('auth');

Route::get('/about', [ContactController::class, 'index'])->name('about')->middleware('auth');
Route::post('/contact', [ContactController::class, 'store'])->name('contact');
