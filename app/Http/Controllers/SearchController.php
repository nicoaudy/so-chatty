<?php

namespace Chatty\Http\Controllers;

use Chatty\Http\Controllers\Controller;
use Chatty\Models\User;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
	public function getResults()
	{
        $query = request()->input('query');
        if (!$query) {
            return redirect()->route('home');
        }
        $users = User::where(DB::raw("CONCAT(first_name, ' ', last_name)"), 'LIKE', "%{$query}%")
                ->orWhere('username', 'LIKE', "%{$query}%")
                ->get();
		return view('search.results', compact('users'));
	}
}
