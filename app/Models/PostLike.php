<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostLike extends Model
{
    protected $table = 'post_likes';

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
