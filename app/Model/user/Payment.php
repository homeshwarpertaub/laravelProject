<?php

namespace App\Model\user;


use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $table = "payments";
    protected $fillable = ['payment_status','type','applicant_id'];

    public function applicant()
    {
        return $this->belongsTo(applicant::class);
    }
}
