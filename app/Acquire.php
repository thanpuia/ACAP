<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acquire extends Model
{
    protected $fillable = ['student_id'];
    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
