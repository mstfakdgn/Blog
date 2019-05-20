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
//User routes
Route::group(['namespace' => 'User'],function(){

  Route::get('/','HomeController@index');
  Route::get('post/{post?}','PostController@index')->name('post');

  Route::get('post/tag/{tag}','HomeController@tag')->name('tag');
  Route::get('post/category/{category}','HomeController@category')->name('category');
});

//Admin routes
Route::group(['namespace' =>'Admin'],function(){

  Route::get('admin/home','HomeController@index')->name('admin.home');
  //Users routes
  Route::resource('admin/user','UserController');
  //Post routes
  Route::resource('admin/post','PostController');
  //Tag routes
  Route::resource('admin/tag','TagController');
  //Category routes
  Route::resource('admin/category','CategoryController');
});




/*Route::get('admin/home',function(){
    return view('admin.home');
})->name('post');


*/
