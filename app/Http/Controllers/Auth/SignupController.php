<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;


class SignupController extends Controller
{
  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required',
      'email' => 'required|email|unique:users',
      'password' => 'required|confirmed'
    ], [
      'password.confirmed' => 'Las contraseñas no coinciden.',
      'email' => 'El correo debe ser válido.',
      'email.unique' => 'El correo ya está en uso.',
      'password.required' => 'La contraseña es obligatoria.'
    ]);
    date_default_timezone_set('America/Mexico_City');
    $user = User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
      'avatar' => '',
      'created_at' => date('c')
    ]);
    $user->save();
    $token = $user->createToken('auth_token')->plainTextToken;
    Session(['token' => $token]);
    auth()->login($user);
    return redirect('home');
  }
}
