<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acquire extends Model
{
    protected $fillable = ['student_id','core'
    ,'sem1_sub1','sem1_sub2','sem1_sub3','sem2_sub1','sem2_sub2','sem2_sub3'
    ,'sem3_sub1','sem3_sub2','sem3_sub3','sem4_sub1','sem4_sub2','sem4_sub3'
    ,'sem5_sub1','sem5_sub2','sem5_sub3','sem6_sub1','sem6_sub2','sem6_sub3'];
    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
