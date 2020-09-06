<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'author', 'text', 'slug', 'image', 'image-caption', 'likes', 'dislikes'];
    protected $guarded = ['id', 'category_id', 'tag_id', 'created_at', 'update_at'];
    protected $table = 'news';
}
