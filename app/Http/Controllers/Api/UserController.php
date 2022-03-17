<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
  public function signup(Request $request)
  {
    $request->validate([
      'name' => 'required',
      'email' => 'required|email|unique:users',
      'password' => 'required|confirmed'
    ], [
      'password.confirmed' => 'Las contraseñas no coinciden.',
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
    return response()->json([
      'status' => 'ok',
      'msg' => 'Usuario registrado con éxito.'
    ]);
  }

  public function login(Request $request)
  {
    $request->validate([
      'email' => 'required|email',
      'password' => 'required'
    ]);
    $user = User::where('email', $request->email)->first();
    if (isset($user->id)) {
      if(Hash::check($request->password, $user->password)) {
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
          'status' => 'ok',
          'msg' => 'Sesión iniciada correctamente.',
          'token' => $token,
        ]);
      } else {
        return response()->json([
          'status' => 'error',
          'msg' => 'La contraseña es incorrecta.'
        ]);
      }
    } else {
      return response()->json([
        'status' => 'error',
        'msg' => 'El usuario no está registrado.'
      ], 404);
    }
  }

  public function userProfile()
  {
    return response()->json([
      'status' => 'ok',
      'msg' => 'Perfil del usuario.',
      'data' => auth()->user()
    ]);
  }

  public function logout(Request $request)
  {
    $request->user()->currentAccessToken()->delete();
    return response()->json([
      'status' => 'ok',
      'msg' => 'Sesión cerrada correctamente.'
    ]);
  }
}
