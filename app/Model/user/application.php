<?php

namespace App\Model\user;


use Illuminate\Database\Eloquent\Model;

class application extends Model
{
    //
    public function applicant()
    {
        return $this->belongsTo(applicant::class);
    }

//    payment
    public function payment()
    {
        return $this->hasOne(payment::class);
    }
}
