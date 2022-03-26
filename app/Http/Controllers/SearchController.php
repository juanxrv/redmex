<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

  public function index()
  {
    
    return view('search');
  }
}
