<?php

use Chatty\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'username'	=> 'user1',
        	'email'		=> 'user@mail.com',
        	'password'	=> bcrypt('secret'),
        ]);        

        User::create([
        	'username'	=> 'user2',
        	'email'		=> 'user2@mail.com',
        	'password'	=> bcrypt('secret'),
        ]);        

        User::create([
        	'username'	=> 'user3',
        	'email'		=> 'user3@mail.com',
        	'password'	=> bcrypt('secret'),
        ]);
    }
}
