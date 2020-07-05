<?php

use App\Post;
use App\Subject;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
		//產生10個post，其subject是找 name='測試主題' 的subject
    $subject = Subject::where('name', '測試主題')->first();
    for ($i = 1; $i <= 10; $i++) {
      $post = new Post;
      $post->content = 'Laravel 文章'.$i;
      $post->subject_id = $subject->id;
      $post->save();
    }
  }
}
