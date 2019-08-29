<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model  
{
    //
    public function posts()  // จะหา Post ของ คน Country นี้
    {
        return $this->hasManyThrough('App\Post','App\User','country_id','user_id');
    }
}
