<?php

Route::group(['namespace' => 'Admin' ], function () {

    Route::get('/', function () {
    	return redirect('admin/dashboard');
	});

    Route::get ('dashboard', 'DashboardController@index');

    /********* КАТЕГОРИИ КОМПАНИИ*****************************************************************/
    Route::get ('company-categories', 'CompanyCategoryController@index');


    /********* КОМПАНИИ **************************************************************************/
    Route::get ('companies', 'CompanyController@index');


});
