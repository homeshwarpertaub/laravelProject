<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class courseChoice extends Model
{
    //
    protected $table = "course_choices";
    protected $fillable = ['title1','duration1','code1','title2','duration2','code2','title3','duration3','code3','applicant_id'];

    public function applicant()
    {
        return $this->belongsTo(applicant::class);
    }
}
