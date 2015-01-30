<?php

Route::get('/', ['as' => 'index', 'uses' => 'PagesController@index']);

Route::get('registration', ['as' => 'registration_path', 'uses' => 'RegistrationController@create']);

Route::post('registration', ['as' => 'registration_path', 'uses' => 'RegistrationController@store']);