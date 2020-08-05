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

            $table->string('semester',20)->nullable();

         //   $table->foreign('acquire_id')->references('id')->on('acquires');
            // $table->string('core',20)->nullable();

            // $table->string('elective_one',20)->nullable();
            // $table->string('elective_two',20)->nullable();
            // $table->string('core_one',20)->nullable();
            // $table->string('core_two',20)->nullable();
            // $table->string('core_three',20)->nullable();
            

            // $table->string('semester_one_subject_one',60)->nullable();
            // $table->string('semester_one_subject_two',60)->nullable();
            // $table->string('semester_one_subject_three',60)->nullable();
            // $table->string('semester_one_subject_four',60)->nullable();
            // $table->string('semester_one_subject_five',60)->nullable();
            // $table->string('semester_one_subject_six',60)->nullable();

            // $table->string('semester_two_subject_one',60)->nullable();
            // $table->string('semester_two_subject_two',60)->nullable();
            // $table->string('semester_two_subject_three',60)->nullable();
            // $table->string('semester_two_subject_four',60)->nullable();
            // $table->string('semester_two_subject_five',60)->nullable();
            // $table->string('semester_two_subject_six',60)->nullable();

            // $table->string('semester_three_subject_one',60)->nullable();
            // $table->string('semester_three_subject_two',60)->nullable();
            // $table->string('semester_three_subject_three',60)->nullable();
            // $table->string('semester_three_subject_four',60)->nullable();
            // $table->string('semester_three_subject_five',60)->nullable();
            // $table->string('semester_three_subject_six',60)->nullable();

            // $table->string('semester_four_subject_one',60)->nullable();
            // $table->string('semester_four_subject_two',60)->nullable();
            // $table->string('semester_four_subject_three',60)->nullable();
            // $table->string('semester_four_subject_four',60)->nullable();
            // $table->string('semester_four_subject_five',60)->nullable();
            // $table->string('semester_four_subject_six',60)->nullable();

            // $table->string('semester_five_subject_one',60)->nullable();
            // $table->string('semester_five_subject_two',60)->nullable();
            // $table->string('semester_five_subject_three',60)->nullable();
            // $table->string('semester_five_subject_four',60)->nullable();
            // $table->string('semester_five_subject_five',60)->nullable();
            // $table->string('semester_five_subject_six',60)->nullable();

            // $table->string('semester_six_subject_one',60)->nullable();
            // $table->string('semester_six_subject_two',60)->nullable();
            // $table->string('semester_six_subject_three',60)->nullable();
            // $table->string('semester_six_subject_four',60)->nullable();
            // $table->string('semester_six_subject_five',60)->nullable();
            // $table->string('semester_six_subject_six',60)->nullable();

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
