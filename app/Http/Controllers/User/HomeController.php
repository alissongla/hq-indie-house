<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;
use App\Interview;
use App\Review;
use App\Podcast;

class HomeController extends Controller
{
    public function index()
    {
        $news = News::where('publish',1)->paginate(3);
        $interview = Interview::where('publish',1)->latest()->first();
        $review = Review::where('publish',1)->latest()->first();
        $podcast = Podcast::where('publish',1)->latest()->first();
        return view('user.home', compact('news','interview','review','podcast'));

    }
}
