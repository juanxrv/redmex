<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LandingController extends Controller
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
    if (auth()->user()) {
      return redirect()->route('home');
    }
    $page = isset($request->page) ? $request->page : 1;
    $trending = Http::get($this->apiuri . '/trending/all/week', [
        'api_key' => $this->apikey,
        'language' => 'es',
        'page' => $page
      ]);
    $data = $trending->json();
    return view('landing', [
      'data' => $data,
      'apibase' => $this->apibase,
      'page' => $page
    ]);
  }
}
