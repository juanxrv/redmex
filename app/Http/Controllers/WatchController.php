<?php

namespace App\Http\Controllers;

use App\Models\Historial;
use Illuminate\Support\Facades\Auth;

class WatchController extends Controller
{
  public function index($media_type, $id)
  {
    $detail = movieDb('/' . $media_type . '/' . $id, 1, 'videos,similar');
    $history = Historial::firstOrNew([
      'media_id' => $id,
      'media_type' => $media_type,
      'media_name' => $detail['title'] ?? $detail['name'],
      'media_overview' => $detail['overview'],
      'media_genre' => $detail['genres'][0]['name'],
      'media_vote' => $detail['vote_average'],
      'media_img' => mediaImg('original', $detail['backdrop_path']) ?? asset('images/not_found.svg'),
      'cliente_id' => Auth::user()->id
    ]);
    $history->save();

    return view('watch', [
      'data' => $detail,
      'media_type' => $media_type
    ]);
  }
}
