<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class employment extends Model
{
    //
    protected $table="employments";
    protected $fillable = ['job_name1','job_address1','job_position1','job_description1','job_from1','job_to1','job_name2','job_address2','job_position2','job_description2','job_from2','job_to2','applicant_id'];

    public function applicant()
    {
        return $this->belongsTo(applicant::class);
    }
}
