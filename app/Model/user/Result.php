<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    //
    protected $table = "results";
    protected $fillable = ['result_status', 'result_comments', 'applicant_id'];

    public function applicant()
    {
        return $this->belongsTo(applicant::class);
    }
}
