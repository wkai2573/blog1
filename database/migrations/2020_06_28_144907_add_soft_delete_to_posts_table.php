<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSoftDeleteToPostsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::table('posts', function (Blueprint $table) {
			//新增假刪欄位 deleted_at
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::table('posts', function (Blueprint $table) {
			//down 記得要寫
      $table->dropSoftDeletes();
    });
  }
}
