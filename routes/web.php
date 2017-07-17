<?php

Route::get('/', [
	'uses' 	=> 'HomeController@index',
	'as'	=> 'home'
]);

Route::get('/alert', function () {
    return redirect()->route('home')->with('info', 'You have signed up!');
});