<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('/receipe', 'ReceipeController');

//Route::get('/receipe', 'ReceipeController@index');
//Route::get('/receipe/{receipe}', 'ReceipeController@show');
//Route::get('/receipe/create', 'ReceipeController@create');
//Route::post('/receipe', 'ReceipeController@store');
//Route::get('/receipe/{receipe}/edit', 'ReceipeController@edit');
//Route::patch('/receipe/{receipe}', 'ReceipeController@update');
//Route::delete('/receipe', 'ReceipeController@destroy');