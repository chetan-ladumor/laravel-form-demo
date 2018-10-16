<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reg',[
	'uses'=>'RegistrationController@create',  // 
	'as'=>'reg'
]);
Route::post('/reg',[
	'uses'=>'RegistrationController@store',
	'as'=>'reg'
]);

Route::get('/games', [
	'uses'=>'GamesController@index',
	'as'=>'games'
]);

Route::get('/login',[
	'uses'=>'SessionController@create',
	'as'=>'login'
]);

Route::post('/login',[
	'uses'=>'SessionController@store',
	'as'=>'login'
]);

Route::get('/logout',[
	'uses'=>'SessionController@logout',
	'as'=>'logout'
]);

Route::get('/testgame', function () {
    
    $data['games'] = ['Gradius', 'Kirbys Adventure', 'Pac-Man'];
    $data['publishers'] = ['Konami', 'Nintendo', 'Bandai Namco'];
    
    return view('games.testgame', compact('data'));
});

