<?php
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'BaseController@getIndex');



Route::get('{url}', 'MaintextController@getIndex'); //всегда последний запрос!