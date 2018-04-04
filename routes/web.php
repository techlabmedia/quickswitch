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
    $posts = App\Post::latest()->paginate(3);
    return view('welcome', compact('posts','categories'));
});

Route::get('comm/{id}', 'commentsController@show');

route::get('/contact', function(){
    return view('contact');
});

Route::get('/about','categoryController@portifolio');

Route::get('posts/{id}','categoryController@selection');
Route::get('post/{slug}','categoryController@show');

Route::get('post/{id}', function($id){
	$posts = App\Post::where('category_id',$id)->firstOrFail();
	return view('items', compact('posts'));
});




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['prefix' => 'user'], function () {
    Auth::routes();
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', 'ContactController@show');
Route::post('/contact',  'ContactController@mailToAdmin'); 


Route::group(['middleware' => ['web']], function () {
	// Comments
	Route::post('comments/{post_id}', ['uses' => 'commentsController@store', 'as' => 'comments.store']);


	Route::get('post/{slug}', ['as' => 'post', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
	Route::resource('posts', 'PostController');
});



