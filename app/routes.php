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

Route::get('login', array('as'=>'login','uses' => 'UserController@login'));

Route::post('do_login', array('as'=>'do_login','uses' => 'UserController@do_login'));

Route::group(array('before' => 'auth'), function()
{
    Route::get('logout', array('as'=>'logout','uses' => 'UserController@logout'));

    Route::get('/', array('uses' => 'UserController@index'));

    Route::get('user/create', array('as'=>'create','uses' => 'UserController@create'));

    Route::post('user/store', array('as'=>'store','uses' => 'UserController@store'));

    Route::get('user/edit/{id}', array('as'=>'edit','uses' => 'UserController@edit'));

    Route::post('user/update/{id}', array('as'=>'update','uses' => 'UserController@update'));

    Route::get('user/delete/{id}', array('as'=>'delete','uses' => 'UserController@destroy'));

});
