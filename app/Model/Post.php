<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'id_author', 'id_category', 'title', 'description'
    ];

    public function comments()
    {
        return $this->hasMany('App\Model\Comment', 'id_post');
    }

    public function author()
    {
        return $this->belongsTo('App\Model\Admins', 'id_author');
    }

    public function category()
    {
        return $this->belongsTo('App\Model\Category', 'id_category');
    }
}
