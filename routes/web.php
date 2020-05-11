<?php

Route::group(['namespace' => 'Site' ], function () {

    Route::get('/', 'IndexController@index');

    Route::get('contact', 'IndexController@contact');
    Route::get('about', 'IndexController@about');

    Route::get('products/{category}',    'ProductController@index');
    Route::get('product-view/{product}', 'ProductController@productView');

    Route::get('news',             'NewsController@index');
    Route::get('news-view/{news}', 'NewsController@newsView');

    Route::get('partners',         'PartnerController@index');

});


