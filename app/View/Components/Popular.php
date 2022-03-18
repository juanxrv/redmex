<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Popular extends Component
{
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public $dataPopular;
  public $apibase;
  public $genres;
  public $page;

  public function __construct($data)
  {
    $this->dataPopular = $data['dataPopular'];
    $this->apibase = $data['apibase'];
    $this->genres = $data['genres'];
    $this->page = $data['page'];
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.popular');
  }
}
