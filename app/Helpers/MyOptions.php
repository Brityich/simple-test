<?php
/**
 * Created by PhpStorm.
 * User: sasha
 * Date: 06.03.18
 * Time: 14:59
 */

namespace App\Helpers;

use App\Model\Options;


class MyOptions
{
    public static function setOption($option_key, $option_value) {
        if ($option_value != null) {
            if (!Options::where('option_key', $option_key)->first()) {
                Options::create(['option_key' => $option_key, 'option_value' => $option_value]);
            } else {
                Options::where('option_key', $option_key)->update(['option_value' => $option_value]);
            }
        }
    }

    public static function getOption($option_key)
    {
        if (Options::where('option_key', $option_key)->first()) {
            return Options::where('option_key', $option_key)->first()->option_value;
        } else {
            return null;
        }
    }
}