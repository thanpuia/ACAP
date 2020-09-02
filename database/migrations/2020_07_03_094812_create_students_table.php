<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
          //  $table->unsignedBigInteger('acquire_id');

            $table->string('name',60)->nullable();
            $table->string('contact',15)->nullable();
            $table->string('fathers_mothers_name',60)->nullable();
            $table->string('fathers_mothers_contact',15)->nullable();
            $table->string('sex',10)->nullable();
            $table->string('permanent_home_address',120)->nullable();
            $table->string('detailed_present_address_aizawl',120)->nullable();
            $table->string('name_of_guardian',60)->nullable();
            $table->string('address_of_guardian',120)->nullable();
            $table->string('contact_of_guardian',15)->nullable();
            $table->date('dob',50)->nullable();
            $table->string('community',20)->nullable();
            $table->string('identification_mark',60)->nullable();
            $table->string('religion',20)->nullable();
            $table->string('ration_card',10)->nullable();
            $table->string('handicapped',10)->nullable();
            $table->string('urban_rural',10)->nullable();
            $table->string('aadhaar',20)->nullable();
            $table->string('mzu_registration',30)->nullable();
            $table->string('college_registration',30)->nullable();
            $table->string('result',10)->nullable(); 
            $table->string('stream', 10)->nullable();

            $table->string('semester',20)->nullable();

            $table->string('status',20)->nullable();
            $table->string('status_details',250)->nullable();

            $table->string('batch_title',100)->nullable();
            $table->dateTime('batch_upload_time',0)->nullable();

            $table->softDeletes();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
