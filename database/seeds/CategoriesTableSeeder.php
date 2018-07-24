<?php

use Illuminate\Database\Seeder;
use App\Model\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        Category::create(['name' => 'Animals']);
        Category::create(['name' => 'Cycling']);
        Category::create(['name' => 'Travelling']);
=======
        Category::create(['name' => str_random(20)]);
>>>>>>> 858eacacc407897566ea1558eb07b077dcf5fc0e
    }
}
