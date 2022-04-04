<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Related extends Component
{
  public $similar;

  public function __construct($similar)
  {
    $this->similar = array_slice($similar['results'], 0, 4);
  }

  public function render()
  {
    return view('components.related');
  }
}
