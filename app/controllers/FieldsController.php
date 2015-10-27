<?php

class UsersController extends BaseController {

	public function index()
	{
		$users = Fiel::all();
		return View::make('fields.index')->withFields($fields);
	}

}