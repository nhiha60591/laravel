<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'FrontEnd\SiteController@getIndex');
// All route for admin
Route::group(['prefix' => 'admin'], function () {
	Route::resource('/', 'BackEnd\SiteController');
    Route::resource('lang', 'BackEnd\MultiLanguageController');
    Route::resource('menus', 'BackEnd\MenusController');
});