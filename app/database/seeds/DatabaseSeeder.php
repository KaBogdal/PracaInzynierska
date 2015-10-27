<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('FieldTableSeeder');
		$this->call('UserTableSeeder');
		$this->call('ThesisTableSeeder');
	}

}
