<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Post::class, function (Faker $faker) {
    return [
        'id_author' => 1,
        'id_category' => 1,
        'title' => 'Lorem ipsum dolor sit amet',
        'description' => str_random(500),
    ];
});
