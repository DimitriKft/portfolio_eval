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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('profile/{id}', 'UserController@show')->middleware('auth');
// Route::get('profile/{id}/edit/', [ 'as' => 'profile.edit', 'uses' => 'UserController@edit']);
// Route::get('profile/{id}/update/', [ 'as' => 'profile.update', 'uses' => 'UserController@update']);

Route::resource('profile', 'UserController');
Route::resource('projets', 'ProjetsController');
Route::resource('articles', 'ArticlesController');