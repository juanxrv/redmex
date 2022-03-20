<?php

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

  Route::get('/favoritos', [FavoritosController::class, 'index']);
  Route::post('/favoritos', [FavoritosController::class, 'store']);

  Route::get('/historial', [HistorialController::class, 'index']);
  Route::post('/historial', [HistorialController::class, 'store']);
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//   return $request->user();
// });
