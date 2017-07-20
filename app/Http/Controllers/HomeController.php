<?php

namespace Chatty\Http\Controllers;

use Chatty\Http\Controllers\Controller;
use Chatty\Models\Status;

class HomeController extends Controller
{	
	public function index()
	{
		if (auth()->check()) {
			$statuses = Status::notReply()->where(function($query){
				return $query->where('user_id', auth()->user()->id)->orWhere('user_id', auth()->user()->friends()->pluck('id'));
			})
			->orderBy('created_at', 'desc')
			->paginate(10);
			return view('timeline.index', compact('statuses'));
		}
		return view('home');
	}
}
