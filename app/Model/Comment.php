<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'id_author', 'id_post', 'text'
    ];

    public function post()
    {
        return $this->belongsTo('App\Model\Post', 'id_post');
    }

    public function author()
    {
        return $this->belongsTo('App\Model\User', 'id_author');
    }
}
