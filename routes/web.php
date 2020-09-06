<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('user/home');
});
Route::get('/ultimas-noticias', function () {
    return view('user/lastNews');
})->name('ultimas-noticias');
Route::get('/podcasts', function () {
    return view('user/podcasts');
})->name('podcasts');

Route::get('/admin/home', function () {
    return view('admin.home');
})->name('admin');

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

//Auth::routes();

//Route::get('/admin/home', 'HomeController@index')->name('home');
