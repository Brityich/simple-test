<?php

namespace App\Model;

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
<<<<<<< HEAD

    public function comments()
    {
        return $this->hasMany('App\Model\Comment', 'id_author');
    }

    public function subscription()
    {
        return $this->hasMany('App\Model\Subscription', 'id_user');
    }
=======
>>>>>>> 858eacacc407897566ea1558eb07b077dcf5fc0e
}
