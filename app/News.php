<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'author', 'text', 'slug', 'image', 'image-caption',];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'news';

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'news_tags')->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'news_categories')->withTimestamps();
    }

    public function getRouteKeyName()
    {
    	return 'slug';
    }

}
