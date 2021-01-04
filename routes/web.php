<?php

Route::get('/', function () {
  return view('welcome');
});

Route::get('tests/test', 'TestController@index');

// 認証が必要な場合は、'middleware' => 'auth'とよく使うので覚えておいたほうがいい
Route::group(['prefix' => 'contact', 'middleware' => 'auth'], function(){
  Route::get('index', 'ContactFormController@index')->name('contact.index');;
  Route::get('create', 'ContactFormController@create')->name('contact.create');;
  Route::post('store', 'ContactFormController@store')->name('contact.store');;
  Route::get('show/{id}', 'ContactFormController@show')->name('contact.show');;
});

// REST
// Route::resource('contacts', 'ContactFormController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
