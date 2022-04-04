<?php

namespace App\Http\Controllers;

class SeriesController extends Controller
{
  public function index()
  {
    $series = movieDb('/tv/popular');
    $genres = movieDb('/genre/tv/list');
    return view('series', [
      'data' => $series,
      'genres' => $genres['genres']
    ]);
    // TODO: Mostrar mensaje de error al ingresar credenciales incorrectas.
    // FIXME: Reparar botones de navegación móvil.
    // TODO: Crear página de perfil de usuario y edición de este.
  }
}
