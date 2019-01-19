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
    return view('form');
});

/*  Route::get('amigo', 'AmigoController@index');
 Route::get('amigo/{$id}', 'AmigoController@show');
 Route::post('amigo', 'AmigoController@store');
 Route::put('amigo/{$id}', 'AmigoController@update');
 Route::delete('amigo/{$id}', 'AmigoController@delete'); */