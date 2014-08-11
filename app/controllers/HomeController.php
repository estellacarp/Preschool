<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		$abc = abc::paginate(30);
		return View::make('public.home',['abc'=>$abc]);
	}

	public function theme()
	{
		return View::make('public.theme');
	}

	public function plans()
	{
		return View::make('public.plans');
	}

	public function art()
	{
		return View::make('public.art');
	}

	public function abcBook()
	{
		$abc = abc::paginate(30);
		return View::make('public.abcBook',['abc'=>$abc]);
	}

}
