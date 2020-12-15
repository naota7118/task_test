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

// /にアクセスしたらwelcomeに処理を渡すという設定
viewファイルはresourceというフォルダの中のviewsというフォルダの中にある
Route::get('/', function () {
    return view('welcome');
});
