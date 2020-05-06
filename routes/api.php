<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:api')->group( function () { 
	Route::post('/matchfixture', 'API\UserController@generateMatchFixture');
});

Route::get('login',array('as'=>'login', function(){
    die('Access Denied !!!');
}));

// This route was created for one time registration
// Route::post('/register', 'API\UserController@register');

Route::get('/teams', 'API\UserController@showTeams');
Route::get('/players/{teamId}', 'API\UserController@showPlayers');
Route::get('/playerdetails/{playerId}', 'API\UserController@showPlayerDetails');
Route::get('/matches/{teamId}', 'API\UserController@showMatches');
Route::get('/showpoints', 'API\UserController@showPoints');