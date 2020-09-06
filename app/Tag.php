<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];
    protected $guarded = ['id', 'category_id', 'created_at', 'update_at'];
    protected $table = 'tags';
}
