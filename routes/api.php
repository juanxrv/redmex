<?php

use App\Http\Controllers\Api\EpisodesController;
use App\Http\Controllers\Api\FavoritosController;
use App\Http\Controllers\Api\HistorialController;
use App\Http\Controllers\Api\UserController;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/signup', [UserController::class, 'signup']);
Route::post('/login', [UserController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function() {

  Route::get('/user', [UserController::class, 'userProfile']);
  Route::put('/user', [UserController::class, 'updateUser']);
  Route::get('/logout', [UserController::class, 'logout']);

  Route::get('/favs', [FavoritosController::class, 'index']);
  Route::delete('/favs', [FavoritosController::class, 'destroy']);
  Route::post('/favs', [FavoritosController::class, 'store']);

  Route::get('/history', [HistorialController::class, 'index']);
  Route::post('/history', [HistorialController::class, 'store']);

  Route::get('/episodes', [EpisodesController::class, 'index']);
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//   return $request->user();
// });
