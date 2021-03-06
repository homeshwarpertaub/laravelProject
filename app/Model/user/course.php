<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class course extends Model
{

    use Searchable;

    //
    public function categories()
    {
        return $this->belongsToMany('App\Model\user\category', 'course_categories')->withTimestamps();
    }

    //tell laravel what we want to fetch
    public function getRouteKeyName()
    {
        return 'slug'; // TODO: Change the autogenerated stub
    }

}
