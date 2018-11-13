<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'homecontrol@show');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('addproduct','homecontrol@addprod');

Route::get('addtodb','homecontrol@add');

Route::get('product/{id}/delete','homecontrol@delete');

Route::get('product/{id}/modify','homecontrol@modify');

Route::get('product/{id}/confirm','homecontrol@confdelete');
