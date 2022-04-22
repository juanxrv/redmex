<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HistorialRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return false;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      'media_id' => 'required',
      'media_type' => 'required',
      'media_name' => 'required',
      'media_overview' => 'required',
      'media_genre' => 'required',
      'media_vote' => 'required',
      'media_img' => 'required'
    ];
  }
}
