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

Route::group(['namespace' => 'Pages'], function() {
	Route::get('/', 'PagesController@index')->name('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin'], function() {
	Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
		Route::get('/', 'AdminController@index')->name('index');

		/* Rotas de Main*/
		Route::get('main/edit/{main}', 'MainController@edit')->name('main.edit');
		Route::patch('main/{main}', 'MainController@update')->name('main.update');

		/* Rotas de Video*/
		Route::get('video/edit/{video}', 'VideoController@edit')->name('video.edit');
		Route::patch('video/{video}', 'VideoController@update')->name('video.update');
	});
});


