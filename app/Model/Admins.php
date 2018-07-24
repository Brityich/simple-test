<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admins extends Authenticatable
{
    use Notifiable;

    protected $table = 'admins';

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

    public function posts()
    {
        return $this->hasMany('App\Model\Post', 'id_author');
    }
=======
>>>>>>> 858eacacc407897566ea1558eb07b077dcf5fc0e
}
