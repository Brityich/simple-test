<?php

use Illuminate\Database\Seeder;
use App\Model\Post;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*factory(App\Model\Post::class, 250)->create()->each(function ($u) {
            $u->posts()->save(factory(App\Model\Post::class)->make());
        });*/
        Post::create(['id_author' => 1,
            'id_category' => rand(0,4),
            'title' => 'Lorem ipsum dolor',
            'description' => str_random(500)
        ]);
    }
}
