<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseChoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_choices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title1');
            $table->string('duration1');
            $table->string('code1');
            $table->string('title2');
            $table->string('duration2');
            $table->string('code2');
            $table->string('title3');
            $table->string('duration3');
            $table->string('code3');
            $table->integer('applicant_id');
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
        Schema::dropIfExists('course_choices');
    }
}
