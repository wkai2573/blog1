<?php

use App\Post;
use App\Subject;
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

// View__________

//導向view
Route::get('/hello-world', function () {
  return view('hello_world');
});

//導向view 並傳參數
Route::get('/about_us', function () {
  return view('about_us', ['name' => 'Laravel 範例']);
});

// laravel/ui 產生__________
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function(){
	var_dump(Auth::check());
});


// Controller__________

// 交給 Controller 處理
Route::get('/inspire', 'inspireController@inspire');

// 測試新增
Route::get('/add', function () {
  // $newSub = new App\Subject;
  // $newSub->name = 'BB';
  // $newSub->save();
  $p = new Post;
  $p->content = 'AA-2';
  $p->subject_id = '1';
  $p->save();
});

// 取得所有post
Route::get('/getPost', function () {
  return Post::get();
});
// 取得post，使用LazyCollection物件(取用時才抓資料)
Route::get('/getPost2', function () {
	return Post::cursor()->slice(10, 5);
});

// 取得subject id1 的 posts
Route::get('/subject_1', function () {
  $subject = Subject::find(1);
  $posts = $subject->posts;
  return $posts;
});

// 取得tag id1 的 posts
Route::get('/postsByTag1', function () {
  $tag = App\Tag::find(1);
  $posts = $tag->posts;
  return $posts;
});

