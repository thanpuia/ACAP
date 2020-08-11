<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function students()
    {
        return $this->hasMany('App\Student');
    }
}
