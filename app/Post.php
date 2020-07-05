<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //引用軟刪除namespace

class Post extends Model {

	use SoftDeletes; //使用軟刪除

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
