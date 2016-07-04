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


Route::get('ingenieria_civil', [
	'middleware' => 'web',
	'as'   => 'ingenieria_civil', 
	'uses' => 'PaginasController@VerIngenieriaCivil'
	]);


Route::get('aligeramientos', [
	'middleware' => 'web',
	'as'   => 'aligeramientos', 
	'uses' => 'PaginasController@VerAligeramientos'
	]);


Route::get('otras_aplicaciones', [
	'middleware' => 'web',
	'as'   => 'otras_aplicaciones', 
	'uses' => 'PaginasController@VerOtrasAplicaciones'
	]);

Route::post('enviarmail', [
	'middleware' => 'web',
	'as'   => 'send.mail', 
	'uses' => 'PaginasController@EnviarMail'
	]);