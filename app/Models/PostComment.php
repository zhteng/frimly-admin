<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    protected $table = 'post_comments';

    protected $fillable = ['content'];

    public function scopeOfPost($query, $post)
    {
        return $query->where('post_id', $post);
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}