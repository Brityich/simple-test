<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'id_user', 'id_category'
    ];

    
}
