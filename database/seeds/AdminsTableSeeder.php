<?php

use Illuminate\Database\Seeder;
<<<<<<< HEAD
use Illuminate\Support\Facades\Hash;
use App\Model\Admins;
=======
>>>>>>> 858eacacc407897566ea1558eb07b077dcf5fc0e

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        Admins::create([
            'name'=> 'test_admin',
            'email'=> 'test.test',
            'password' => bcrypt(str_random(15))
        ]);
=======
        //
>>>>>>> 858eacacc407897566ea1558eb07b077dcf5fc0e
    }
}
