<?php

Route::group(['namespace' => 'Admin' ], function () {

    Route::get('/', function () {
    	return redirect('admin/dashboard');
	});

    Route::get ('dashboard', 'DashboardController@index');
    
    Route::get ('categories', 'CategoryController@index');
    
    Route::get ('products/{category?}',    'ProductController@index');
    Route::get ('product-form/{product?}', 'ProductController@form');
    Route::post('product-save/{product?}', 'ProductController@save');
    Route::get ('product-delete/{product}','ProductController@delete');

    Route::get ('news',              'NewsController@index');
    Route::get ('news-form/{news?}', 'NewsController@form');
    Route::post('news-save/{news?}', 'NewsController@save');
    Route::get ('news-delete/{news}','NewsController@delete');

});
