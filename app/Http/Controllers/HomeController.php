<?php

namespace App\Http\Controllers;

use GuzzleHttp\Pool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
  private $apiuri;
  private $apibase;
  private $apikey;

  public function __construct()
  {
    $this->apiuri = env('API_URI');
    $this->apibase = env('API_BASE');
    $this->apikey = env('API_KEY');
  }

  public function index(Request $request)
  {
    $page = isset($request->page) ? $request->page : 1;

    $trendingWeek = Http::get($this->apiuri . '/trending/all/week', [
      'api_key' => $this->apikey,
      'language' => 'es'
    ]);
    $trendingDay = Http::get($this->apiuri . '/trending/all/day', [
      'api_key' => $this->apikey,
      'language' => 'es'
    ]);
    $genres = Http::get($this->apiuri . '/genre/list', [
      'api_key' => $this->apikey,
      'language' => 'es'
    ]);
    $popular = Http::get($this->apiuri . '/tv/popular', [
      'api_key' => $this->apikey,
      'language' => 'es',
      'region' => 'US',
      'page' => $page
    ]);

    $dataTrendingWeek = $trendingWeek->json();
    $dataTrendingDay = $trendingDay->json();
    $dataGenres = $genres->json();
    $dataPopular = $popular->json();
    return view('home',[
      'dataTrendingWeek' => array_slice($dataTrendingWeek['results'], 0, 3),
      'dataTrendingDay' => array_slice($dataTrendingDay['results'], 0, 10),
      'dataPopular' => $dataPopular['results'],
      'genres' => $dataGenres['genres'],
      'apibase' => $this->apibase,
      'page' => $page
    ]);
  }
}
