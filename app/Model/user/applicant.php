<?php

namespace App\Model\user;


use Illuminate\Database\Eloquent\Model;

class applicant extends Model
{
    //yu want to create relationship with coursechoice model
    public function coursechoice()
    {
        return $this->hasMany(courseChoice::class);
    }

//    institutions
    public function institution()
    {
        return $this->hasMany(institution::class);
    }

//    sc results
    public function scresult()
    {
        return $this->hasMany(scresult::class);
    }

//    hsc results
    public function hscresult()
    {
        return $this->hasMany(hscresult::class);
    }

    public function otherQualification()
    {
        return $this->hasMany(otherQualification::class);
    }

//    employment
    public function employment()
    {
        return $this->hasMany(employment::class);
    }

//    applications
    public function application()
    {
        return $this->hasMany(application::class);
    }

    //scuploads
    public function ScUpload()
    {
        return $this->hasMany(ScUpload::class);
    }

    //hscuploads
    public function hscUploads(){
        return $this->hasMany(hscUploads::class);
    }

}
