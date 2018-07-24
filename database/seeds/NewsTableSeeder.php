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
        for($i = 0; $i < 10; $i++)
        {
            Post::create(['id_author' => 1,
                'id_category' => rand(1,3),
                'title' => 'Lorem ipsum dolor',
                'description' => str_random(100)
            ]);
        }
    }
}
