<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller {
  /**
   * Display a listing of the resource.
   * 顯示資料清單(GET)
   * http://127.0.0.1/posts
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    return view('posts.index', ['posts' => Post::cursor()->sortDesc()]);
  }

  /**
   * Show the form for creating a new resource.
   * 新增用的表單(GET)
   * http://127.0.0.1/posts/create
   *
   * @return \Illuminate\Http\Response
   */
  public function create() {
    return view('posts.create');
  }

  /**
   * Store a newly created resource in storage.
   * 新增表單(POST)
   *
   * @param  \Illuminate\Http\Request  $request 這是使用者請求的資訊(操作view發出請求)
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request) {
    // return var_dump($request->input());
    if (empty($request->input('content'))) {
      return "不能為空";
    }

    $post = new Post;
    $post->content = $request->input('content');
    $post->subject_id = 0;
    $post->save();
    return redirect(route('posts.index'));
  }

  /**
   * Display the specified resource.
   * 顯示指定資料(GET)
   * http://127.0.0.1/posts/1
   *
   * @param  \App\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function show(Post $post) {
    return view('posts.show', ['post' => $post]);
  }

  /**
   * Show the form for editing the specified resource.
   * 修改用的表單(GET)
   * http://127.0.0.1/posts/1/edit
   *
   * @param  \App\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function edit(Post $post) {
    return view('posts.edit', ['post' => $post]);
  }

  /**
   * Update the specified resource in storage.
   * 修改表單(PUT)
	 *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Post $post) {
    $post->content = $request->input('content');
    $post->save();
    return redirect(route('posts.show', ['post' => $post])); //redirect 重新導向至show
  }

  /**
   * Remove the specified resource from storage.
   * 刪除指定資料(DELETE)
	 *
   * @param  \App\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function destroy(Post $post) {
    $post->delete();
    return redirect(route('posts.index'));
  }
}
