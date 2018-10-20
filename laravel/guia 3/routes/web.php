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
Route::get('/actors', "ActorsController@index");
Route::get('/actors/search', "ActorsController@search");
// Route::post('/actors/result/{request}', "ActorsController@result");
Route::get('/actors/result/', "ActorsController@result");
Route::get('/movies', "MoviesController@index");
Route::get('/movies/{id}', "MoviesController@show");
