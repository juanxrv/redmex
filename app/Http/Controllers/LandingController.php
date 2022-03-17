<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
  public function index(Request $request)
  {
    if(auth()->user()) {
      return redirect()->route('home');
    }
    return view('landing');
  }
}
