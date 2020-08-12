<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class CoursesDetail extends Model
{
    protected $fillable = [
        'course_id', 'userenroll_id', 'access_code',  'showdate', 'status'
    ];

    public function course_relation()
    {
        return $this->belongsTo('App\Models\Course', 'course_id');
    }

    public function userenroll_relation()
    {
        return $this->hasMany('App\Models\User', 'userenroll_id');
    }

}
