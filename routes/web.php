<?php

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

//測試新增
Route::get('/add', function(){
	// $newSub = new App\Subject;
	// $newSub->name = 'BB';
	// $newSub->save();
	$p = new App\Post;
	$p->content = 'AA-2';
	$p->subject_id = '1';
	$p->save();
});

//測試存取
Route::get('/test', function(){
	// 取得所有post
	// return App\Post::get();

	// 取得subject id1 的 posts
	// $subject = Subject::find(1);
	// $posts = $subject->posts;
	// return $posts;

	// 取得tag id1 的 posts
	$tag = App\Tag::find(1);
	$posts = $tag->posts;
	return $posts;
});
