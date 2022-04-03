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
    $search = movieDb('/search/multi', 1, '', $request->input('query'));
    return view('search', [
      'data' => $search['results'],
      'query' => $request->input('query')
    ]);
  }
}
