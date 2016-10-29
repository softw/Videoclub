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

Route::get('/', 'HomeController@getHome');

Route::get('auth/login', function (){
    return View('auth.login');
});

Route::get('auth/logout', function (){
    return View('home');
});

Route::get('catalog', 'catalogController@getIndex');

Route::get('catalog/show/{id}','CatalogController@getShow');

Route::get('catalog/create', 'catalogController@getCreate');

Route::get('catalog/edit/{id}','catalogController@getEdit');
