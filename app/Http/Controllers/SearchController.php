<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
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
    $search = Http::get($this->apiuri . '/search/multi', [
      'api_key' => $this->apikey,
      'query' => $request->input('query'),
      'language' => 'es'
    ])->json();
    return view('search', [
      'data' => $search['results'],
      'apibase' => $this->apibase
    ]);
  }
}
