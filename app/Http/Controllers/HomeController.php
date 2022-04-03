<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index(Request $request)
  {
    $page = isset($request->page) ? $request->page : 1;

    $trendingWeek = movieDb('/trending/all/week');
    $trendingDay = movieDb('/trending/all/day');
    $genres = movieDb('/genre/list');
    $popular = movieDb('/tv/popular', $page);

    return view('home', [
      'dataTrendingWeek' => array_slice($trendingWeek['results'], 0, 3),
      'dataTrendingDay' => array_slice($trendingDay['results'], 0, 10),
      'dataPopular' => $popular['results'],
      'genres' => $genres['genres'],
      'page' => $page
    ]);
  }
}
