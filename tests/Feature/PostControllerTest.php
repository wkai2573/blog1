<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Post;

class PostControllerTest extends TestCase {
  /**
   * A basic feature test example.
   *
   * @return void
   */
  public function testExample() {
    $response = $this->get('/');

    $response->assertStatus(200);
  }

  // 測試新增(store)
  public function testStore() {
    $this->post(route('posts.store'), [
      'content' => 'Laravel 6.0 tutorial day 21',
    ]);

    $this->assertDatabaseHas('posts', [
      'content' => 'Laravel 6.0 tutorial day 21',
    ]);
  }

  // 測試更新(update)
  public function testUpdate() {
    $post = new Post;
    $post->content = '';
    $post->subject_id = 0;
    $post->save();

    $this->put(route('posts.update', ['post' => $post]), [
      'content' => 'Laravel 6.0 tutorial day 21-2',
    ]);

    $this->assertDatabaseHas('posts', [
      'content' => 'Laravel 6.0 tutorial day 21-2',
    ]);
  }

	// 測試刪除(destroy)
  public function testDestroy() {
    $post = new Post;
    $post->content = 'Laravel 6.0 tutorial day 21-3';
    $post->subject_id = 0;
    $post->save();

		$this->delete(route('posts.destroy', ['post' => $post]));

		// 軟刪除
		$this->assertSoftDeleted('posts', [
			'content' => 'Laravel 6.0 tutorial day 21-3',
		]);

		// 刪除
    // $this->assertDatabaseMissing('posts', [
    //   'content' => 'Laravel 6.0 tutorial day 21-3',
		// ]);
  }
}
