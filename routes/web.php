<?php

Route::group(['namespace' => 'Site' ], function () {

    Route::get('/', 'IndexController@index');

    Route::get('change-city', 'SiteBaseController@changeCity');

    Route::get('companies/{city}/{category}', 'CompanyController@getByCityAndCategory');
    Route::get('company-view/{company}',      'CompanyController@companyView');

});


Route::get('temp', function(){

    $city = \App\Modules\Cities\City::find(4);

    $s = new \App\Modules\Cities\Services\CityCategoryService($city);


    foreach ($s->roots() as $c){

        dump($c);

    }


});