<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

<<<<<<< HEAD
    protected $fillable = [
=======
    protected $filleble = [
>>>>>>> 858eacacc407897566ea1558eb07b077dcf5fc0e
        'name'
    ];

    public function posts()
    {
        return $this->hasMany('App\Model\Post', 'id_category');
    }
<<<<<<< HEAD

    public function subscription()
    {
        return $this->hasMany('App\Model\Subscription', 'id_category');
    }
=======
>>>>>>> 858eacacc407897566ea1558eb07b077dcf5fc0e
}
