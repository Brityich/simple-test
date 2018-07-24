<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'option_key', 'option_value',
    ];
}
