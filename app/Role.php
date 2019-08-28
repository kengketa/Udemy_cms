<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //Many to Many relation
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
