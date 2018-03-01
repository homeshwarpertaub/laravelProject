<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class otherQualification extends Model
{
    use Notifiable;

    protected $fillable=['othercourse1','otherInst1','othergrade1','instDuration1','from1','to1'];
    protected $table = 'other_qualifications';


    //
    public function applicant()
    {
        return $this->belongsTo(applicant::class);
    }
}
