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

Route::get('profile/{id}', 'UserController@show')->middleware('auth');
Route::get('/edit/', [ 'as' => 'profile.edit', 'uses' => 'UserController@edit']);


Route::resource('projets', 'ProjetsController');
Route::resource('articles', 'ArticlesController');