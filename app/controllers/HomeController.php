<?php

class HomeController extends BaseController {

	public function index()
	{
		return View::make('index');
	}
	
	public function showLogin()
	{
	    // show the form
	    return View::make('login');
	}

	public function doLogin()
	{

		// validate the info, create rules for the inputs
		$rules = array(
				'email'    => 'required|email', 
				'password' => 'required|alphaNum|min:3' 
		);
	
		
		$validator = Validator::make(Input::all(), $rules);
	
		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::to('login')
			->withErrors($validator) 
			->withInput(Input::except('password'));
		} else {
	
			$userdata = array(
					'email'     => Input::get('email'),
					'password'  => Input::get('password')
			);
	
			// attempt to do the login
			if (Auth::attempt($userdata)) {
	
				// validation successful!
				return Redirect::to('');
	
			} 

			else {
				//Nieudane logowanie
				return Redirect::to('login');
	
			}
	
		}
	}
	
	public function doLogout()
	{
		Auth::logout(); // uzytkownik sie wylogowuje
		return Redirect::to(''); // przekierowanie na strone glowna
	}

}
