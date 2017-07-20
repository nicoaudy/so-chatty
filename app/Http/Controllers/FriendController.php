<?php

namespace Chatty\Http\Controllers;

use Chatty\Models\User;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function index()
    {
        $friends 	= auth()->user()->friends();
        $requests 	= auth()->user()->friendRequests();
        return view('friends.index', compact('friends', 'requests'));
    }

    public function getAdd($username)
    {
    	$user = User::where('username', $username)->first();
    	if (!$user) {
    		return redirect()->route('home')->with('info', 'That user could not be found.');
    	}
    	if (auth()->user()->hasFriendRequestPending($user) || $user->hasFriendRequestPending(auth()->user())) {
			return redirect()->route('profile.index', $user->username)->with('info', 'Friend request already pending.');
    	}
    	if (auth()->user()->isFriendsWith($user)) {
    		return redirect()->route('profile.index', $user->username)->with('info', 'You are already friend.');
    	}

    	auth()->user()->addFriend($user);
    	return redirect()->route('profile.index', $user->username)->with('info', 'Friend request sent.');
    }
}
