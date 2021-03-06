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


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/', 'WelcomeController');
Route::resource('message', 'MessageController');
Route::resource('categories', 'CategoriesController');
Route::resource('profile', 'UserController');
Route::resource('projets', 'ProjetsController');
Route::resource('articles', 'ArticlesController');