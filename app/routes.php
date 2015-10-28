<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('login', 'UserController@login');

Route::post('do_login', 'UserController@do_login');

Route::get('logout', 'UserController@logout');

Route::get('/', array('uses' => 'UserController@index'));

Route::get('user/create', array('uses' => 'UserController@create'));

Route::post('user/store', array('uses' => 'UserController@store'));

Route::get('user/edit/{id}', array('uses' => 'UserController@edit'));

Route::post('user/update/{id}', array('as'=>'update','uses' => 'UserController@update'));

Route::get('user/delete/{id}', array('uses' => 'UserController@destroy'));
