<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Model\Admins;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admins::create([
            'name'=> 'test_admin',
            'email'=> 'test.test',
            'password' => bcrypt(str_random(15))
        ]);
    }
}
