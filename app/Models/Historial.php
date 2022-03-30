<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
  use HasFactory;
  protected $fillable = [
    'media_id',
    'media_type',
    'media_name',
    'media_overview',
    'media_genre',
    'media_vote',
    'media_img',
    'cliente_email'
  ];
  public $timestamps = false;
  
  public function users()
  {
    return $this->hasMany(User::class);
  }
}
