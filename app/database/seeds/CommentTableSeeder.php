<?php

class CommentTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('comments')->delete();

		
		$books = Book::all();
		$id = 0;
		foreach ($books as $book) {
			
			$comment = new Comment();
			$comment->text = "Comment {$id}";
			$book->comments()->save($comment);
			$id++;
		}

	}

}
