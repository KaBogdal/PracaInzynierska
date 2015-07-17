<?php

class BooksController extends BaseController {

	public function index()
	{
		$books = Book::all();
		
		return View::make('books.index')->withBooks($books);
	}

	public function edit($id)
	{
		$book = Book::findOrFail($id);
			
		return View::make('books.edit')->withBook($book);
	}
	
	public function newBook()
	{
		$book = new Book();
			
		return View::make('books.new')->withBook($book);
	}
	
	
	public function show($id)
	{
		$book = Book::findOrFail($id);
		
		return View::make('books.show')->withBook($book);
	}

	public function store($id)
	{
		$book = Book::findOrFail($id);
		$book->title = Input::get('title');
		$book->desc = Input::get('desc');
		$book->save();
		
		return View::make('books.show')->withBook($book);
	}

	public function create()
	{
		$book = new Book();
		$book->title = Input::get('title');
		$book->desc = Input::get('desc');
		$book->save();
	
		return View::make('books.show')->withBook($book);
	}
	
	public function delete($id)
	{
		$book = Book::findOrFail($id);
		$book->delete();
		
		return Redirect::back();
	}
	
	public function comment($id)
	{
		$book = Book::findOrFail($id);
		$comment = new Comment();
		$comment->text = Input::get('text');
		$book->comments()->save($comment);
	
		return Redirect::back();
	}
	
}
