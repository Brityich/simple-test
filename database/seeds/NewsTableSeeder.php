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
<<<<<<< HEAD
        for($i = 0; $i < 10; $i++)
        {
            Post::create(['id_author' => 1,
                'id_category' => rand(1,3),
                'title' => 'Lorem ipsum dolor',
                'description' => str_random(100)
            ]);
        }
=======
        Post::create(['id_author' => 1,
            'id_category' => rand(0,4),
            'title' => 'Lorem ipsum dolor',
            'description' => str_random(500)
        ]);
>>>>>>> 858eacacc407897566ea1558eb07b077dcf5fc0e
    }
}
