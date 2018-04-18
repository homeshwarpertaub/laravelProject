<?php

namespace App\Model\user;


use Illuminate\Database\Eloquent\Model;

class scUpload extends Model
{
    //
    protected $table = "sc_uploads";
    protected $fillable = ['name','size','applicant_id'];

    public function applicant()
    {
        return $this->belongsTo(applicant::class);
    }

}
