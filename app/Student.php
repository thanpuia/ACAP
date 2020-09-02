<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    
    protected $fillable = ['name','contact','fathers_mothers_name', 'fathers_mothers_contact','sex','permanent_home_address','detailed_present_address_aizawl','name_of_guardian', 'address_of_guardian','contact_of_guardian','dob','community','identification_mark', 'religion','ration_card',
    'handicapped','urban_rural','aadhaar', 'mzu_registration','college_registration','result','stream','semester',
'batch_title','batch_upload_time'];
    public function acquire()
    {
        return $this->hasOne('App\Acquire');
    }
}
