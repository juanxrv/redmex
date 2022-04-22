<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Historial;
use Illuminate\Http\Request;

class HistorialController extends Controller
{
  public function index(Request $request)
  {
    $hist = Historial::where('user_id', $request->user()->id)
      ->select('id', 'media_id', 'media_type', 'media_name', 'media_overview', 'media_genre', 'media_vote', 'media_img')
      ->get();
    if (count($hist) > 0) {
      return response()->json([
        'status' => 'ok',
        'msg' => 'Favoritos del usuario',
        'data' => $hist
      ]);
    } else {
      return response()->json([
        'status' => 'error',
        'msg' => 'Este usuario no tiene historial.',
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
    $historial = Historial::firstOrNew([
      'media_id' => $request->media_id,
      'media_type' => $request->media_type,
      'media_name' => $request->media_name,
      'media_overview' => $request->media_overview,
      'media_genre' => $request->media_genre,
      'media_vote' => $request->media_vote,
      'media_img' => $request->media_img,
      'user_id' => $request->user()->id
    ]);
    $historial->save();
    return response()->json([
      'status' => 'ok',
      'msg' => 'Elemento agregado al historial correctamente.'
    ]);
  }
}
