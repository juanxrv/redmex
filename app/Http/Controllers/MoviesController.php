<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
  public function index()
  {
    $movies = movieDb('/movie/popular');
    $genres = movieDb('/genre/movie/list');
    return view('movies', [
      'data' => $movies,
      'genres' => $genres['genres']
    ]);
  }
}
