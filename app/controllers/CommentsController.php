<?php

class CommentsController extends BaseController {

	public function index()
	{
		$comments = Comment::all();
		
		return View::make('comments.index')->withComments($comments);
	}

	public function delete($id)
	{
		$comment = Comment::findOrFail($id);
		$comment->delete();
		
		return Redirect::back();
	}
	
}
