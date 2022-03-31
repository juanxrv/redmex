<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EpisodesController extends Controller
{
  private $apiuri;
  private $apikey;

  public function __construct()
  {
    $this->apiuri = env('API_URI');
    $this->apikey = env('API_KEY');
  }

  public function index(Request $request)
  {
    $episodes = Http::get($this->apiuri. '/tv/' . $request->id . '/season/'. $request->season, [
      'api_key' => $this->apikey,
      'language' => 'es'
    ])->json();
    return response($episodes);
  }
}
