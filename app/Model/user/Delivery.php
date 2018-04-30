<?php

namespace App\Model\user;


use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    //
    protected $table ="deliveries";
    protected $fillable = ['deliveries_status','comments','applicant_id'];


    public function applicant()
    {
        return $this->belongsTo(applicant::class);
    }
}
