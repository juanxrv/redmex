<?php

use Illuminate\Support\Facades\Http;

function movieDb($route, $page = 1, $append = '', $query = '')
{
  $apiuri = env('API_URI');
  $apikey = env('API_KEY');
  $data = Http::get($apiuri . $route, [
    'api_key' => $apikey,
    'language' => 'es',
    'region' => 'MX',
    'append_to_response' => $append,
    'query' => $query,
    'page' => $page
  ])->json();
  return $data;
}

function mediaImg($size, $img)
{
  $apibase = env('API_BASE');
  $url = $apibase . '/' . $size . $img;
  return $url;
}