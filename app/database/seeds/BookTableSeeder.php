<?php

class BookTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('books')->delete();
		
		for($i=0; $i<50; $i++) {
			$book = new Book();
			$book->title = "Book Title $i";
			$book->desc = "Description $i";
			$book->save();
		}
	}

}
