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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 */

/*  Route::get('amigo', 'AmigoController@index');
 Route::get('amigo/{$id}', 'AmigoController@show');
 Route::post('amigo', 'AmigoController@store');
 Route::put('amigo/{$id}', 'AmigoController@update');
 Route::delete('amigo/{$id}', 'AmigoController@delete'); */


 Route::resource('amigo', 'AmigoController');