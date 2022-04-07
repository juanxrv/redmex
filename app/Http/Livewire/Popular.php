<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Popular extends Component
{
  public function render()
  {
    $page = 1;
    $genres = movieDb('/genre/list');
    $popular = movieDb('/tv/popular', $page);
    return view('livewire.popular', [
      'dataPopular' => $popular['results'],
      'genres' => $genres['genres'],
      'page' => $page
    ]);
  }
}
