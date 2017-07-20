<?php

namespace Chatty\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function postStatus(Request $request)
    {
    	$this->validate($request, [
    		'status'	=> 'required|max:1000'
    	]);

    	auth()->user()->statuses()->create([
    		'body'	=> $request->status
    	]);

    	return redirect()->route('home')->with('info', 'Status posted.');
    }
}
