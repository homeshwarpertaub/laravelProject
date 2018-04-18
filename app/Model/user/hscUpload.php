<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class hscUpload extends Model
{
    //
    protected $table = "hsc_uploads";
    protected $fillable = ['name','size','applicant_id'];

    public function applicant()
    {
        return $this->belongsTo(applicant::class);
    }
}
