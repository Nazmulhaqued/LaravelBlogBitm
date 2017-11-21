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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/', function() {
    //$news = App\News::all();
    $news = App\News::paginate(5);
    return view('nms-class.news.index', compact('news'));
});*/

Route::get('/', 'NewsController@index');

Route::get('/single-news', function() {
    return view('nms-class.news.single-news');
});
