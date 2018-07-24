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
        Category::create(['name' => 'Animals']);
        Category::create(['name' => 'Cycling']);
        Category::create(['name' => 'Travelling']);
    }
}
