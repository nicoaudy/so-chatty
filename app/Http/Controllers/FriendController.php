<?php

namespace Chatty\Http\Controllers;

use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function index()
    {
        $friends = auth()->user()->friends();
        return view('friends.index', compact('friends'));
    }
}
