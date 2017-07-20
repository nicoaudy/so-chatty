<?php

namespace Chatty\Http\Controllers;

use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function index()
    {
        $friends 	= auth()->user()->friends();
        $requests 	= auth()->user()->friendRequests();
        return view('friends.index', compact('friends', 'requests'));
    }
}
