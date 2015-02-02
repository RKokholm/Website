<?php

Route::get('/', ['as' => 'index', 'uses' => 'PagesController@index']);

Route::get('registration', ['as' => 'registration_path', 'uses' => 'RegistrationController@create']);

Route::post('registration', ['as' => 'registration_path', 'uses' => 'RegistrationController@store']);

Route::get('login', ['as' => 'login_path', 'uses' => 'LoginController@create']);

Route::post('login', ['as' => 'login_path', 'uses' => 'LoginController@postLogin']);

Route::get('logout', ['as' => 'logout_path', 'uses' => 'LoginController@destroy']);

Route::get('management', ['as' => 'management_path', 'uses' => 'ManagementController@create']);

Route::post('management', ['as' => 'management_path', 'uses' => 'ManagementController@store']);