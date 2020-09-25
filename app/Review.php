<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['title', 'subtitle', 'rating', 'author', 'text', 'slug', 'image', 'image-caption',];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'reviews';

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'review_tags')->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'review_categories')->withTimestamps();
    }

    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
