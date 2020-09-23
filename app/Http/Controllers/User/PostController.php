<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(News $post )
    {
        return view('user.post', compact('post'));
    }
}
