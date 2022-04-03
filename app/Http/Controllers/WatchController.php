<?php

namespace App\Http\Controllers;

class WatchController extends Controller
{
  public function index($media_type, $id)
  {
    $detail = movieDb('/' . $media_type . '/' . $id, 1, 'videos,similar');
    return view('watch', [
      'data' => $detail,
      'apibase' => imgbase(),
      'media_type' => $media_type
    ]);
  }
}
