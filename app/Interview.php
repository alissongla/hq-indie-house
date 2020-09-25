<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    protected $fillable = ['title', 'author', 'text', 'slug', 'image', 'image-caption',];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'inteviews';

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'inteview_tags')->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'inteview_categories')->withTimestamps();
    }

    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
