<?php

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'Marian Student',
        'username' => 'student',
        'email'    => 's@gmail.com',
        'password' => Hash::make('123'),
    	'access' => 0,
    ));
    User::create(array(
    		'name'     => 'Wojciech Wykladowca',
    		'username' => 'wykladowca',
    		'email'    => 'w@gmail.com',
    		'password' => Hash::make('123'),
    		'access' => 1,
    ));
    User::create(array(
    		'name'     => 'Stefan Dziekan',
    		'username' => 'dziekan',
    		'email'    => 'd@gmail.com',
    		'password' => Hash::make('123'),
    		'access' => 2,
    ));
}

}