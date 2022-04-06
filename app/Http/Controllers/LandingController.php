<?php

namespace App\Http\Controllers;

class LandingController extends Controller
{
  public function index()
  {
    if (auth()->user()) {
      return redirect()->route('home');
    }
    $trending = movieDb('/trending/all/week');
    return view('landing', [
      'data' => $trending
    ]);
    // FIXME: Reparar media_overview de los favoritos cuando sea nulo.
    // TODO: Hacer avatar.
  }
}
