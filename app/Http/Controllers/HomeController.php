<?php

namespace Chatty\Http\Controllers;

use Chatty\Http\Controllers\Controller;

class HomeController extends Controller
{	
	public function index()
	{
		if (auth()->check()) {
			return view('timeline.index');
		}
		return view('home');
	}
}
