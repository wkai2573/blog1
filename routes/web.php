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

//導向view
Route::get('/hello-world', function () {
	return view('hello_world');
});

//導向view 並傳參數
Route::get('/about_us', function () {
	return view('about_us', ['name'=> 'Laravel 範例']);
});

//交給 Controller 處理
Route::get('/inspire', 'inspireController@inspire');
