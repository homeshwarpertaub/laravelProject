<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class applicant extends Model
{
    //
    protected $table = "applicants";
    protected $fillable = ['applicant_surname', 'applicant_otherName', 'applicant_maidenName', 'applicant_dob', 'applicant_sex', 'applicant_status', 'applicant_nationality', 'applicant_Pid', 'applicant_notMauritian', 'applicant_IDproof', 'applicant_address', 'applicant_home', 'applicant_office', 'applicant_mobile', 'applicant_fax', 'applicant_email', 'applicant_parentName', 'applicant_parentAddress', 'applicant_parentHome', 'applicant_parentOffice', 'applicant_referee1Name', 'applicant_referee1Occupation', 'applicant_referee1Address', 'applicant_referee1Phone', 'applicant_referee2Name', 'applicant_referee2Occupation', 'applicant_referee2Address', 'applicant_referee2Phone', 'applicant_careerChoice', 'applicant_profilePhoto'];

    public function courseChoice()
    {
        return $this->hasMany(courseChoice::class);
    }

    public function institution()
    {
        return $this->hasMany(institution::class);
    }

    public function scUpload()
    {
        return $this->hasMany(scUpload::class);
    }

    public function hscUpload()
    {
        return $this->hasMany(hscUpload::class);
    }

    public function otherQualification()
    {
        return $this->hasMany(otherQualification::class);
    }

    public function employment()
    {
        return $this->hasMany(employment::class);
    }
}
