<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {
  /**
	 * 取得posts
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function posts() {
    return $this->belongsToMany(Post::class);
  }
}
