<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function index(Request $request)
  {
    if(!auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
      return back()->withErrors([
        'status' => 'El correo o contraseña ingresados son incorrectos'
      ]);
    }
    $user = User::where('email', $request->email)->first();
    $token = $user->createToken('auth_token')->plainTextToken;
    Session(['token' => $token]);
    return redirect()->route('home');
  }

  public function destroy()
  {
    Auth::logout();
    return redirect('/');
  }
}
