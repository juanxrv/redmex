<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WatchController extends Controller
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
  public function index($media_type, $id)
  {
    $detail = Http::get($this->apiuri . '/' . $media_type . '/' . $id, [
      'api_key' => $this->apikey,
      'language' => 'es'
    ]);
    $detailData = $detail->json();
    return view('watch', [
      'data' => $detailData,
      'apibase' => $this->apibase,
      'media_type' => $media_type
    ]);
  }
}
