<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;

class LastNewsController extends Controller
{
    public function index()
    {
        $news = News::where('publish',1)->paginate(3);
        return view('user.lastNews', compact('news'));

    }
}
