<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Seasons extends Component
{
  public $data;
  
  public function __construct($data)
  {
    $this->data = $data;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.seasons', ['data' => $this->data]);
  }
}
