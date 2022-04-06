<?php

namespace App\Http\Controllers;

class SeriesController extends Controller
{
  public function index()
  {
    $series = movieDb('/tv/popular');
    $genres = movieDb('/genre/tv/list');
    return view('series', [
      'data' => $series,
      'genres' => $genres['genres']
    ]);
  }
}
