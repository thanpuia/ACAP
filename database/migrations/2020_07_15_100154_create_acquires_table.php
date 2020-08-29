<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcquiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acquires', function (Blueprint $table) {
        
        $table->id();
        $table->unsignedBigInteger('student_id');
        
        $table->string('core')->nullable();

        $table->string('sem1_sub1')->nullable();
        $table->string('sem1_sub2')->nullable();
        $table->string('sem1_sub3')->nullable();
        $table->string('sem2_sub1')->nullable();
        $table->string('sem2_sub2')->nullable();
        $table->string('sem2_sub3')->nullable();
        $table->string('sem3_sub1')->nullable();
        $table->string('sem3_sub2')->nullable();
        $table->string('sem3_sub3')->nullable();
        $table->string('sem4_sub1')->nullable();
        $table->string('sem4_sub2')->nullable();
        $table->string('sem4_sub3')->nullable();
        $table->string('sem5_sub1')->nullable();
        $table->string('sem5_sub2')->nullable();
        $table->string('sem5_sub3')->nullable();
        $table->string('sem6_sub1')->nullable();
        $table->string('sem6_sub2')->nullable();
        $table->string('sem6_sub3')->nullable();

        $table->foreign('student_id')->references('id')->on('students');
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
        Schema::dropIfExists('acquires');
    }
}
