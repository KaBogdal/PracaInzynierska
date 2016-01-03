<?php

class UserTableSeeder extends Seeder
{

public function run()
{
//------------------------------------------------------------------ Students
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'Karol Kuzora',
        'username' => 'KuzoraK',
        'email'    => 'kk@gmail.com',
        'password' => Hash::make('123'),
    	'access' => 0,
    	'field_id' => 1,
    ));
    
    User::create(array(
    		'name'     => 'Stefan Przepiórczy',
    		'username' => 'PrzepiórczyS',
    		'email'    => 'sp@gmail.com',
    		'password' => Hash::make('123'),
    		'access' => 0,
    		'field_id' => 1,
    ));
    
    User::create(array(
    		'name'     => 'Anna Mała',
    		'username' => 'MałaA',
    		'email'    => 'am@gmail.com',
    		'password' => Hash::make('123'),
    		'access' => 0,
    		'field_id' => 2,
    ));
    User::create(array(
    		'name'     => 'Tadeusz Woźny',
    		'username' => 'WoźnyT',
    		'email'    => 'tw@gmail.com',
    		'password' => Hash::make('123'),
    		'access' => 0,
    		'field_id' => 3,
    ));
    User::create(array(
    		'name'     => 'Wojciech Pocieszny',
    		'username' => 'PociesznyW',
    		'email'    => 'wp@gmail.com',
    		'password' => Hash::make('123'),
    		'access' => 0,
    		'field_id' => 4,
    ));
    User::create(array(
    		'name'     => 'Dorota Zawadzka',
    		'username' => 'ZawadzkaD',
    		'email'    => 'dz@gmail.com',
    		'password' => Hash::make('123'),
    		'access' => 0,
    		'field_id' => 5,
    ));
    
    User::create(array(
    		'name'     => 'Szczepan Kaczka',
    		'username' => 'KaczkaS',
    		'email'    => 'ks@gmail.com',
    		'password' => Hash::make('123'),
    		'access' => 0,
    		'field_id' => 6,
    ));
    User::create(array(
    		'name'     => 'Karol Kuzora',
    		'username' => 'KuzoraK1',
    		'email'    => 'kk1@gmail.com',
    		'password' => Hash::make('123'),
    		'access' => 0,
    		'field_id' => 1,
    ));
    
    User::create(array(
    		'name'     => 'Stefan Przepiórczy',
    		'username' => 'PrzepiórczyS1',
    		'email'    => 'sp1@gmail.com',
    		'password' => Hash::make('123'),
    		'access' => 0,
    		'field_id' => 1,
    ));
    
    User::create(array(
    		'name'     => 'Anna Mała',
    		'username' => 'MałaA1',
    		'email'    => 'am1@gmail.com',
    		'password' => Hash::make('123'),
    		'access' => 0,
    		'field_id' => 2,
    ));
    User::create(array(
    		'name'     => 'Tadeusz Woźny',
    		'username' => 'WoźnyT1',
    		'email'    => 'tw1@gmail.com',
    		'password' => Hash::make('123'),
    		'access' => 0,
    		'field_id' => 3,
    ));
    User::create(array(
    		'name'     => 'Wojciech Pocieszny',
    		'username' => 'PociesznyW1',
    		'email'    => 'wp1@gmail.com',
    		'password' => Hash::make('123'),
    		'access' => 0,
    		'field_id' => 4,
    ));
    User::create(array(
    		'name'     => 'Dorota Zawadzka',
    		'username' => 'ZawadzkaD1',
    		'email'    => 'dz1@gmail.com',
    		'password' => Hash::make('123'),
    		'access' => 0,
    		'field_id' => 5,
    ));
    
    User::create(array(
    		'name'     => 'Szczepan Kaczka',
    		'username' => 'KaczkaS1',
    		'email'    => 'ks1@gmail.com',
    		'password' => Hash::make('123'),
    		'access' => 0,
    		'field_id' => 6,
    ));
//------------------------------------------------------------------ Lecturers
    User::create(array(
    		'name'     => 'Antoni Krem',
    		'username' => 'KremA',
    		'email'    => 'ak@gmail.com',
    		'password' => Hash::make('123'),
    		'access' => 1,
    		
    ));
    User::create(array(
    		'name'     => 'Marian Wielki',
    		'username' => 'WielkiM',
    		'email'    => 'mw@gmail.com',
    		'password' => Hash::make('123'),
    		'access' => 1,
    		
    ));
    User::create(array(
    		'name'     => 'Bogumiła Wąs',
    		'username' => 'WąsB',
    		'email'    => 'bw@gmail.com',
    		'password' => Hash::make('123'),
    		'access' => 1,
    		
    ));

//------------------------------------------------------------------ Boss
    User::create(array(
    		'name'     => 'Adam Profesor',
    		'username' => 'Admin',
    		'email'    => 'a@gmail.com',
    		'password' => Hash::make('123'),
    		'access' => 2,
    		
    ));
}

}