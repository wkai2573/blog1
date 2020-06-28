<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
  /**
   * The attributes that are mass assignable.
   * 可修改欄位
   * @var array
   */
  protected $fillable = [
    'content',
  ];

  /**
   * 取得subject
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function subject() {
    return $this->belongsTo(Subject::class);
  }

  /**
   * 取得tags
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function tags() {
    return $this->belongsToMany(Tag::class);
  }
}
