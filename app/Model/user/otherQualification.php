<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class otherQualification extends Model
{
    //
    protected $table = 'other_qualifications';
    protected $fillable = ['other_course1','other_inst1','other_grade1','from1','to1','other_course2','other_inst2','other_grade2','from2','to2','applicant_id'];

    public function applicant()
    {
        return $this->belongsTo(applicant::class);
    }
}
