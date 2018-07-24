<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'id_author', 'id_post', 'text'
    ];

<<<<<<< HEAD
    public function post()
    {
        return $this->belongsTo('App\Model\Post', 'id_post');
    }

    public function author()
    {
        return $this->belongsTo('App\Model\User', 'id_author');
    }
=======
    /*public function post()
    {
        return $this->belongsTo('App\Model\Post');
    }*/
>>>>>>> 858eacacc407897566ea1558eb07b077dcf5fc0e
}
