<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function acquire()
    {
        return $this->hasOne('App\Acquire');
    }
}
