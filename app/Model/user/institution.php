<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class institution extends Model
{
    //
    protected $table= 'institutions';
    protected $fillable= ['inst_name1','entered1','left1','inst_name2','entered2','left2','applicant_id'];

    public function applicant()
    {
        return $this->belongsTo(applicant::class);
    }
}
