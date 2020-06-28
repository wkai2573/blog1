<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSubjectIdToPostsTable extends Migration {
  /**
   * Run the migrations.
   * 新增欄位 subject_id 在content後面
   * @return void
   */
  public function up() {
    Schema::table('posts', function (Blueprint $table) {
      $table->bigInteger('subject_id')->after('content');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::table('posts', function (Blueprint $table) {
      $table->dropColumn('subject_id');
    });
  }
}
