<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
  public function index()
  {
    // dd(auth()->user()->favoritos[1]->media_name);
    return view('profile');
  }

  public function update(Request $request)
  {
    $user = User::find(auth()->user()->id);
    if (isset($user->id)) {
      $validation = [];
      if (isset($request->password)) $validation['password'] = 'confirmed';
      if (isset($request->email)) $validation['email'] = 'email|unique:users';
      $request->validate($validation, [
        'password.confirmed' => 'Las contraseñas no coinciden.',
        'email' => 'El correo debe ser válido.',
        'email.unique' => 'El correo ya está en uso.',
        'password.required' => 'La contraseña es obligatoria.'
      ]);
      isset($request->name) ? $user->name = $request->name : '';
      isset($validation['email']) ? $user->email = $request->email : '';
      isset($validation['password']) ? $user->password = Hash::make($request->password) : '';
      isset($request->avatar) ? $user->avatar = $request->avatar : '';
      $user->save();
    }
    return redirect('profile');
  }
}
