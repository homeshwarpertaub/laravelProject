<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('applicant_id');
            $table->string('applicant_surname');
            $table->string('applicant_otherName');
            $table->string('applicant_maidenName')->nullable();
            $table->date('applicant_dob');
            $table->string('applicant_sex');
            $table->string('applicant_status');
            $table->string('applicant_nationality');
            $table->string('applicant_Pid');
            $table->string('applicant_notMauritian');
            $table->string('applicant_address');
            $table->string('applicant_home');
            $table->string('applicant_office')->nullable();
            $table->string('applicant_mobile');
            $table->string('applicant_fax')->nullable();
            $table->string('applicant_email');
            $table->string('applicant_parentName')->nullable();
            $table->string('applicant_parentAddress')->nullable();
            $table->string('applicant_parentHome')->nullable();
            $table->string('applicant_parentOffice')->nullable();
            $table->string('applicant_referee1Name');
            $table->string('applicant_referee1Occupation');
            $table->string('applicant_referee1Address');
            $table->string('applicant_referee1Phone');
            $table->string('applicant_referee2Name');
            $table->string('applicant_referee2Occupation');
            $table->string('applicant_referee2Address');
            $table->string('applicant_referee2Phone');
            $table->string('applicant_careerChoice');
            $table->string('applicant_profilePhoto')->nullable();

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
        Schema::dropIfExists('applicants');
    }
}
