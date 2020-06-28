<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model {
  /**
   * The attributes that are mass assignable.
   * 可修改欄位
   * @var array
   */
  protected $fillable = [
    'name',
  ];

  /**
	 * 取得posts
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function posts() {
    return $this->hasMany(Post::class);
  }
}
