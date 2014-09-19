<?php

// Getting to default landing page
Route::get('/', array('as' => 'home', 'uses' => 'HomeController@getIndex'));
