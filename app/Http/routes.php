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

Route::get('/', function () {
	return view('welcome');
});



Route::get('icopor', [
	'middleware' => 'web',
	'as'   => 'icopor', 
	'uses' => 'PaginasController@VerIcopor'
	]);

Route::get('bovedillas_casetones', [
	'middleware' => 'web',
	'as'   => 'icopor', 
	'uses' => 'PaginasController@VerBovedillasCasetones'
	]);

Route::get('asesoria_soporte', [
	'middleware' => 'web',
	'as'   => 'icopor', 
	'uses' => 'PaginasController@AsesoriaSoporte'
	]);