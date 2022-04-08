<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Popular extends Component
{
  public $page = 1;
  public function render()
  {
    $genres = movieDb('/genre/list');
    $popular = movieDb('/tv/popular', $this->page);
    return view('livewire.popular', [
      'dataPopular' => $popular['results'],
      'genres' => $genres['genres'],
      'page' => $this->page
    ]);
  }

  public function goto($page)
  {
    $this->page = $page;
  }
}
