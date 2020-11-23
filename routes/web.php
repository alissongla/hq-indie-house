<?php

use Illuminate\Support\Facades\Route;

Route::get('/podcasts', function () {
    return view('user/podcasts');
})->name('user-podcasts');

Route::group(['namespace' => 'User'], function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/noticias/{post}', 'PostController@index')->name('post');
    Route::get('/ultimas-noticias', 'LastNewsController@index')->name('ultimas-noticias');
    Route::get('/criticas', 'LastReviewsController@index')->name('criticas');
    Route::get('/criticas/{review}', 'LastReviewsController@show')->name('review-post');
    Route::get('/podcasts', 'LastPodcastsController@index')->name('user-podcasts');
    Route::get('/podcasts/{podcast}', 'LastPodcastsController@show')->name('user-podcasts-post');
    Route::get('/entrevistas', 'LastInterviewsController@index')->name('user-interviews');
    Route::get('/entrevistas/{interview}', 'LastInterviewsController@show')->name('user-interviews-post');
    Route::get('/perfis', 'LastProfilesController@index')->name('user-profiles');
    Route::get('/perfis/{profile}', 'LastProfilesController@show')->name('user-profiles-post');
});


Route::get('/admin/home', function () {
    return view('admin.home');
})->name('admin')->middleware('auth');

Route::get('/admin/post', function () {
    return view('admin.pages.cadNoticias');
})->name('cadNoticias');

Route::get('/admin/categories', 'CategoryController@index')->name('categories');
Route::get('/admin/categories/insert', 'CategoryController@create')->name('categories-create');
Route::post('/admin/categories/insert', 'CategoryController@store')->name('categories-store');
Route::get('/admin/categories/edit/{id}', 'CategoryController@edit')->name('categories-edit');
Route::put('/admin/categories/edit/{id}', 'CategoryController@update')->name('categories-update');
Route::delete('/admin/categories/delete/{id}', 'CategoryController@destroy')->name('categories-destroy');

Route::get('/admin/tags', 'TagController@index')->name('tags');
Route::get('/admin/tags/insert', 'TagController@create')->name('tags-create');
Route::post('/admin/tags/insert', 'TagController@store')->name('tags-store');
Route::get('/admin/tags/edit/{id}', 'TagController@edit')->name('tags-edit');
Route::put('/admin/tags/edit/{id}', 'TagController@update')->name('tags-update');
Route::delete('/admin/tags/delete/{id}', 'TagController@destroy')->name('tags-destroy');

Route::get('/admin/news', 'NewsController@index')->name('news');
Route::get('/admin/news/insert', 'NewsController@create')->name('news-create');
Route::post('/admin/news/insert', 'NewsController@store')->name('news-store');
Route::get('/admin/news/edit/{id}', 'NewsController@edit')->name('news-edit');
Route::put('/admin/news/edit/{id}', 'NewsController@update')->name('news-update');
Route::delete('/admin/news/delete/{id}', 'NewsController@destroy')->name('news-destroy');

Route::get('/admin/interviews', 'InterviewController@index')->name('interviews');
Route::get('/admin/interviews/insert', 'InterviewController@create')->name('interviews-create');
Route::post('/admin/interviews/insert', 'InterviewController@store')->name('interviews-store');
Route::get('/admin/interviews/edit/{id}', 'InterviewController@edit')->name('interviews-edit');
Route::put('/admin/interviews/edit/{id}', 'InterviewController@update')->name('interviews-update');
Route::delete('/admin/interviews/delete/{id}', 'InterviewController@destroy')->name('interviews-destroy');

Route::get('/admin/podcasts', 'PodcastController@index')->name('podcasts');
Route::get('/admin/podcasts/insert', 'PodcastController@create')->name('podcasts-create');
Route::post('/admin/podcasts/insert', 'PodcastController@store')->name('podcasts-store');
Route::get('/admin/podcasts/edit/{id}', 'PodcastController@edit')->name('podcasts-edit');
Route::put('/admin/podcasts/edit/{id}', 'PodcastController@update')->name('podcasts-update');
Route::delete('/admin/podcasts/delete/{id}', 'PodcastController@destroy')->name('podcasts-destroy');

Route::get('/admin/profiles', 'ProfileController@index')->name('profiles');
Route::get('/admin/profiles/insert', 'ProfileController@create')->name('profiles-create');
Route::post('/admin/profiles/insert', 'ProfileController@store')->name('profiles-store');
Route::get('/admin/profiles/edit/{id}', 'ProfileController@edit')->name('profiles-edit');
Route::put('/admin/profiles/edit/{id}', 'ProfileController@update')->name('profiles-update');
Route::delete('/admin/profiles/delete/{id}', 'ProfileController@destroy')->name('profiles-destroy');

Route::get('/admin/reviews', 'ReviewController@index')->name('reviews');
Route::get('/admin/reviews/insert', 'ReviewController@create')->name('reviews-create');
Route::post('/admin/reviews/insert', 'ReviewController@store')->name('reviews-store');
Route::get('/admin/reviews/edit/{id}', 'ReviewController@edit')->name('reviews-edit');
Route::put('/admin/reviews/edit/{id}', 'ReviewController@update')->name('reviews-update');
Route::delete('/admin/reviews/delete/{id}', 'ReviewController@destroy')->name('reviews-destroy');

Auth::routes();
