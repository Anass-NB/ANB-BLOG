<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
  use HasFactory;
  use SoftDeletes;
  protected $guarded = [];



  public function category()
  {
    return $this->belongsTo("App\Models\Category", "category_id");
  }

  public function author()
  {
    return $this->belongsTo("App\Models\User", "user_id");
  }
  public function getRouteKeyName()
  {
    return 'slug';
  }
}
