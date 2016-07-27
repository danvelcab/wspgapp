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

Route::get('/', function()
{
	return View::make('hello');
});


Route::post('/register','UserController@register'); //TODO

Route::get('/getProfile/{id}','UserController@getProfile');
Route::post('/updateProfile/{id}','UserController@updateProfile');

Route::get('/getAttacksByUser/{id}','AttackController@getAttacksByUser'); //HECHO
Route::get('/getDefensesByUser/{id}','AttackController@getDefensesByUser'); //HECHO
Route::post('/newAttack/{id}','AttackController@newAttack'); //HECHO

Route::get('/getMessagesByUser/{id}','MessageController@getMessagesByUser'); //HECHO
Route::post('/newMessage/{id}','MessageController@newMessage'); //HECHO

Route::get('/getSightingsByUser/{id}','SightingController@getSightingsByUser');
Route::post('/newSighting/{id}','SightingController@newSighting');

Route::get('/getCities/{id}','CityController@getCities');
Route::get('/getPokemons','PokemonController@getPokemons');

Route::post('/login','UserController@login');
Route::post('/register','UserController@register');