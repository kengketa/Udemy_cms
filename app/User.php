<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


   // One to one relation
//    public function post()
//    {
//        return $this->hasOne('App\Post');
//    }

    // public function posts()
    // {
    //     return $this->hasMany('App\Post');
    // }

    /// Many to Many relation
    // public function roles()
    // {
    //     return $this->belongsToMany('App\Role')->withPivot('created_at','updated_at');
    // }

    // public function photos(){

    //     return $this->morphMany('App\Photo','imageable');
    // }

    ////// Small application SECTION 18
    public function posts()
    {
        return $this->hasMany('App\Post');
    }

}
