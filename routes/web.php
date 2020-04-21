<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/admin', function () {
    return view('admin');
})->middleware('auth');

Route::get('/pages', function () {
    return view('pages');
})->middleware('auth');

Route::get('/page/update/{id}', function () {
    return view('page-update');
})->middleware('auth');

Route::get('/posts/{post}', 'PostsController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
