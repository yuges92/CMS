<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'firstname' => 'Yugeswaran',
                'lastname' => 'Sivanathan',
                'email' => 'sivayuges@gmail.com',
                'username' => 'yuges',
                'role' => 'Admin',
                'password' => bcrypt('password'),
            ]
        );
    }
}