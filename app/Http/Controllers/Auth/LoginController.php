<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
  public function index(Request $request)
  {
    if(!auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
      return back()->withErrors([
        'status' => 'El correo o contraseña ingresados son incorrectos'
      ]);
    }
    return redirect()->route('home');
  }

  public function destroy()
  {
    auth()->logout();
    return redirect('/');
  }
}
