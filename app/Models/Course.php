<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Course extends Model
{
    protected $fillable = [
        'name', 'desc', 'price', 'cat_id', 'useradd_id', 'metatitle', 'metadescr',
        'metakeyword'

    ];

    public function details_relation()
    {
        return $this->hasMany('App\Models\CoursesDetail', 'course_id');
    }

    public function lessons_relation()
    {
        return $this->hasMany('App\Models\Lesson', 'course_id');
    }

    public function useradd_relation()
    {
        return $this->belongsTo('App\Models\User', 'useradd_id');
    }

    public function cat_relation()
    {
        return $this->belongsTo('App\Models\Category', 'cat_id');
    }

}
