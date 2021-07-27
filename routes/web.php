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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/', 'FilmController@index');
// Route::get('/edit/{id}', 'FilmController@edit');
// Route::get('/show/{id}', 'FilmController@show');
// Route::get('/create', 'FilmController@create');
// Route::post('/store', 'FilmController@store');
// Route::post('/update/{id}', 'FilmController@update');
// Route::get('/destroy/{id}', 'FilmController@destroy');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/','CommentController@index')->name('home');
Route::resource('films','FilmController');
Route::resource('comments','CommentController');