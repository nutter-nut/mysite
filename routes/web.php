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
    $title = "What's up!!!";
    $content = "Welcom to mysite.test";
    return view('welcome')->with([
        'title' => $title,
        'content' => $content,
        ]);
})->name('home');

Route::get('/contact', function () {
    $title = "What!!!";
    $content = "Welcom";
    return view('contact')->with([
        'title' => $title,
        'content' => $content,
        ]);

})->name('contact')->middleware('auth');

Route::get('/about', function () {
    $title = "up!!!";
    $content = "Welcom to about";
    return view('about')->with([
        'title' => $title,
        'content' => $content,
        ]);
})->name('about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
