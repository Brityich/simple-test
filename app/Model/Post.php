<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
<<<<<<< HEAD
    protected $table = 'posts';
=======
    protected $table = 'news';
>>>>>>> 858eacacc407897566ea1558eb07b077dcf5fc0e

    protected $fillable = [
        'id_author', 'id_category', 'title', 'description'
    ];

    public function comments()
    {
        return $this->hasMany('App\Model\Comment', 'id_post');
    }
<<<<<<< HEAD

    public function author()
    {
        return $this->belongsTo('App\Model\Admins', 'id_author');
    }

    public function category()
    {
        return $this->belongsTo('App\Model\Category', 'id_category');
    }
=======
>>>>>>> 858eacacc407897566ea1558eb07b077dcf5fc0e
}
