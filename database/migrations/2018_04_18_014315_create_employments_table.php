<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmploymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('job_name1');
            $table->string('job_address1');
            $table->string('job_position1');
            $table->string('job_description1');
            $table->date('job_from1');
            $table->date('job_to1');
            $table->string('job_name2');
            $table->string('job_address2');
            $table->string('job_position2');
            $table->string('job_description2');
            $table->date('job_from2');
            $table->date('job_to2');
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
        Schema::dropIfExists('employments');
    }
}
