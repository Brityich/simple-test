<?php

use Illuminate\Database\Seeder;
use App\Model\Options;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        Options::create([
            'option_key' => 'standart_language',
            'option_value' => 'en'
        ]);
        Options::create([
            'option_key' => 'about_title',
            'option_value' => 'This blog'
        ]);
        Options::create([
            'option_key' => 'about_text',
            'option_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed elementum odio, in tempor metus. Integer aliquam enim sem, ut placerat est venenatis ut. Nulla dui nulla, vehicula a nunc nec, tincidunt interdum diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed faucibus tellus in ipsum consectetur, tempor viverra nibh tempus. Donec lectus mi, lobortis convallis enim ut, scelerisque malesuada enim. Praesent non velit ante. Donec ut dolor vel turpis placerat malesuada nec sit amet nisl. Donec aliquet, nulla vel posuere vehicula, nulla nunc maximus sapien, sit amet maximus mi arcu egestas elit. Sed congue sodales nisi at ultrices. Morbi at vestibulum neque, id malesuada diam. Fusce eget metus mi. Donec a vehicula dui. Quisque placerat elementum dui nec hendrerit. Maecenas commodo, nisi et congue mollis, erat sapien molestie enim, sit amet volutpat nulla lacus sit amet tellus.'
        ]);
        Options::create([
            'option_key' => 'about_image',
            'option_value' => 'image.png'
        ]);
        Options::create([
            'option_key' => 'number_posts',
            'option_value' => 5
        ]);
        Options::create([
            'option_key' => 'number_words',
            'option_value' => 100
        ]);
        Options::create([
            'option_key' => 'contact_name',
            'option_value' => 'Test admin'
        ]);
        Options::create([
            'option_key' => 'contact_email',
            'option_value' => 'test.test'
        ]);
        Options::create([
            'option_key' => 'contact_phone',
            'option_value' => '+380951827346'
        ]);
        Options::create([
            'option_key' => 'contact_address',
            'option_value' => 'Khmelnitsky, Ukraine'
        ]);
=======
        
>>>>>>> 858eacacc407897566ea1558eb07b077dcf5fc0e
    }
}
