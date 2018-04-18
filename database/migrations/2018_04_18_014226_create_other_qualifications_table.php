<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtherQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_qualifications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('other_course1');
            $table->string('other_inst1');
            $table->string('other_grade1');
            $table->date('from1');
            $table->date('to1');
            $table->string('other_course2');
            $table->string('other_inst2');
            $table->string('other_grade2');
            $table->date('from2');
            $table->date('to2');
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
        Schema::dropIfExists('other_qualifications');
    }
}
