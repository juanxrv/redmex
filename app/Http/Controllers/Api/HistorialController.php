<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Historial;
use Illuminate\Http\Request;

class HistorialController extends Controller
{
  public function index(Request $request)
  {
    $hist = Historial::where('cliente_email', $request->user()->email)
      ->select('id', 'media_id', 'media_type')->get();
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
      'media_type' => 'required'
    ]);
    $historial = Historial::create([
      'media_id' => $request->media_id,
      'media_type' => $request->media_type,
      'cliente_email' => $request->user()->email
    ]);
    $historial->save();
    return response()->json([
      'status' => 'ok',
      'msg' => 'Elemento agregado al historial correctamente.'
    ]);
  }
}
