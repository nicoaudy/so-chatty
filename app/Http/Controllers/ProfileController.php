<?php

namespace Chatty\Http\Controllers;

use Chatty\Http\Controllers\Controller;
use Chatty\Models\User;

class ProfileController extends Controller
{	
	public function getProfile($username)
	{
		$user = User::where('username', $username)->first();
		if (!$user) {
			abort(404);
		}
		return view('profile.index', compact('user'));
	}
}
