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
    $categories= App\Category::all();
    $posts = App\Post::all();
    return view('welcome', compact('posts','categories'));
});

Route::get('/items/{id}', 'pageController@show');

route::get('/contact', function(){
    return view('contact');
});

route::get('/about', function(){
    return view('about');
});

Route::get('post/{slug}', function($slug){
	$post = App\Post::where('slug', '=', $slug)->firstOrFail();
	return view('post', compact('post'));
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['prefix' => 'user'], function () {
    Auth::routes();
});

Route::get('/tutorials/{id}', 'categoryController@getTutorials');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', 'ContactController@show');
Route::post('/contact',  'ContactController@mailToAdmin'); 
