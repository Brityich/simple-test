<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'news';

    protected $fillable = [
        'id_author', 'id_category', 'title', 'description'
    ];

    public function comments()
    {
        return $this->hasMany('App\Model\Comment', 'id_post');
    }
}
