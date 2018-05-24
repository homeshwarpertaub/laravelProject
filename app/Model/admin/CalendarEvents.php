<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class CalendarEvents extends Model
{
    //
    protected $fillable = ['name', 'description', 'task_date'];
}
