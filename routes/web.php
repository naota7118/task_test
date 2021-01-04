<?php

Route::get('/', function () {
  return view('welcome');
});

Route::get('tests/test', 'TestController@index');

Route::group(['prefix' => 'contact', 'middleware' => 'auth'], function(){
  Route::get('index', 'ContactFormController@index');
});

// REST
// Route::resource('contacts', 'ContactFormController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
