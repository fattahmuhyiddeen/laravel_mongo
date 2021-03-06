<?php

namespace App;

use Illuminate\Notifications\Notifiable;
// use Illuminate\Foundation\Auth\User as Authenticatable;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class User extends Model
{
    use Notifiable;

    protected $collection = 'users_collection';

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
}
