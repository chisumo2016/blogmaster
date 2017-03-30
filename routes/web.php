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


Route::get('/contact',['uses'=>'PagesController@getContact', 'as'=>'contact']);

Route::get('/about',['uses'=>'PagesController@getAbout', 'as'=>'about']);
Route::get('/',['uses'=>'PagesController@getIndex', 'as'=>'home']);

Route::resource('posts','PostController');