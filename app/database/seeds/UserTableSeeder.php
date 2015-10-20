<?php

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'Marian Student',
        'username' => 'studentM',
        'email'    => 'ms@gmail.com',
        'password' => Hash::make('123'),
    	'access' => 0,
    	'field' => "inf",
    	'level' => 1,
    ));
    User::create(array(
    		'name'     => 'Anna Studentka',
    		'username' => 'studentkaA',
    		'email'    => 'as@gmail.com',
    		'password' => Hash::make('123'),
    		'access' => 0,
    		'field' => "geo",
    		'level' => 1,
    ));
    User::create(array(
    		'name'     => 'Tadeusz Student',
    		'username' => 'studentT',
    		'email'    => 'ts@gmail.com',
    		'password' => Hash::make('123'),
    		'access' => 0,
    		'field' => "os",
    		'level' => 1,
    ));
    User::create(array(
    		'name'     => 'Wojciech Wykladowca',
    		'username' => 'wykladowcaW',
    		'email'    => 'ww@gmail.com',
    		'password' => Hash::make('123'),
    		'access' => 1,
    		'field' => "0",
    ));
    User::create(array(
    		'name'     => 'Marian Wykladowca',
    		'username' => 'wykladowcaM',
    		'email'    => 'mw@gmail.com',
    		'password' => Hash::make('123'),
    		'access' => 1,
    		'field' => "0",
    ));
    User::create(array(
    		'name'     => 'Stefan Wykladowca',
    		'username' => 'wykladowcaS',
    		'email'    => 'sw@gmail.com',
    		'password' => Hash::make('123'),
    		'access' => 1,
    		'field' => "0",
    ));
    User::create(array(
    		'name'     => 'Stefan Dziekan',
    		'username' => 'dziekan',
    		'email'    => 'd@gmail.com',
    		'password' => Hash::make('123'),
    		'access' => 2,
    		'field' => "0",
    ));
}

}