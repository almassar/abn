<?php

Route::group(['namespace' => 'Auth' ], function () {
  
	Route::get ('admin/login', 'LoginController@showAdminLoginForm')->name('login-admin');

	Route::post('login',  'LoginController@login')->name('login');
	Route::get ('logout', 'LoginController@logout')->name('logout');


});
