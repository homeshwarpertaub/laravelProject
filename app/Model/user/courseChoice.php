<?php

namespace App\Model\user;


use Illuminate\Database\Eloquent\Model;

class courseChoice extends Model
{
    //
    public function applicant()
    {
        return $this->belongsTo(applicant::class);
    }
}
