<?php

class FieldTableSeeder extends Seeder
{

public function run()
{
    DB::table('fields')->delete();
    Field::create(array(
    	'id' => 1,
    	'field' => 'inf',
    	'level' => 1,
    ));
    
    Field::create(array(
    	'id' => 2,
    	'field' => 'geo',
    	'level' => 1,
    ));
    Field::create(array(
    		'id' => 3,
    		'field' => 'os',
    		'level' => 1,
    ));
    
    Field::create(array(
    		'id' => 4,
    		'field' => 'inf',
    		'level' => 2,
    ));
    Field::create(array(
    		'id' => 5,
    		'field' => 'geo',
    		'level' => 2,
    ));
    Field::create(array(
    		'id' => 6,
    		'field' => 'os',
    		'level' => 2,
    ));
}

}