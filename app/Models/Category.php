<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Category extends Model
{
  protected $fillable = [
      'name', 'slug', 'class_id'
  ];

  public function class_relation()
  {
      return $this->belongsTo('App\Models\ClassModel', 'class_id');
  }


}
