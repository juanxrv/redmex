<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Favoritos;
use Illuminate\Http\Request;

class FavoritosController extends Controller
{
  public function index(Request $request)
  {
    $favs = Favoritos::where('user_id', $request->user()->id)
      ->select('id', 'media_id', 'media_type', 'media_name', 'media_overview', 'media_genre', 'media_vote', 'media_img')
      ->get();
    if (count($favs) > 0) {
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
      'media_type' => 'required',
      'media_name' => 'required',
      'media_overview' => 'required',
      'media_genre' => 'required',
      'media_vote' => 'required',
      'media_img' => 'required'
    ]);
    $favorito = Favoritos::create([
      'media_id' => $request->media_id,
      'media_type' => $request->media_type,
      'media_name' => $request->media_name,
      'media_overview' => $request->media_overview,
      'media_genre' => $request->media_genre,
      'media_vote' => $request->media_vote,
      'media_img' => $request->media_img,
      'user_id' => $request->user()->id
    ]);
    $favorito->save();
    return response()->json([
      'status' => 'ok',
      'msg' => 'Favorito agregado al usuario correctamente.',
    ]);
  }

  public function destroy(Request $request)
  {
    $fav = Favoritos::where('media_id', $request->media_id);
    $fav->delete();
    return response()->json([
      'status' => 'ok',
      'msg' => 'Elemento eliminado de Favoritos.'
    ]);
  }
}
