<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Related extends Component
{
  public $similar;
  public $apibase;

  public function __construct($similar, $apibase)
  {
    $this->similar = array_slice($similar['results'], 0, 4);
    $this->apibase = $apibase;
  }

  public function render()
  {
    return view('components.related');
  }
}
