<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Favoritos;
use Illuminate\Http\Request;

class FavoritosController extends Controller
{
  public function index(Request $request)
  {
    $favs = Favoritos::where('cliente_email', $request->user()->email)
      ->select('id', 'media_id', 'media_type')->get();
    if(count($favs) > 0) {
      return response()->json([
        'status' => 'ok',
        'msg' => 'Favoritos del usuario',
        'data' => $favs
      ]);
    } else {
      return response()->json([
        'status' => 'error',
        'msg' => 'Este usuario no tiene favoritos.',
      ]);
    }
  }

  public function store(Request $request)
  {
    $request->validate([
      'media_id' => 'required',
      'media_type' => 'required'
    ]);
    $favorito = Favoritos::create([
      'media_id' => $request->media_id,
      'media_type' => $request->media_type,
      'cliente_email' => $request->user()->email,
    ]);
    $favorito->save();
    return response()->json([
      'status' => 'ok',
      'msg' => 'Favorito agregado al usuario correctamente.',
    ]);
  }
}
