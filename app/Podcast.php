<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    protected $fillable = ['title', 'subtitle', 'rating', 'author', 'text', 'slug', 'embed_link', 'image', 'image-caption',];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'podcasts';

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'podcast_tags')->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'podcast_categories')->withTimestamps();
    }

    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
