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
Route::group(['namespace' =>'Admin','middleware'=>'auth:admin'],function(){

  Route::get('admin/home','HomeController@index')->name('admin.home');
  //Users routes
  Route::resource('admin/user','UserController');
  //Post routes
  Route::resource('admin/post','PostController');
  //Tag routes
  Route::resource('admin/tag','TagController');
  //Category routes
  Route::resource('admin/category','CategoryController');
  //Admin auth route
  Route::get('admin/login','Auth\LoginController@showLoginForm')->name('admin.login');
  Route::post('admin/login','Auth\LoginController@login');

  //Route::post('admin/home','Auth\LoginController@logout')->name('admin.logout');  
});
  //Admin auth route
  Route::get('admin/login','Admin\Auth\LoginController@showLoginForm')->name('admin.login');
  Route::post('admin/login','Admin\Auth\LoginController@login');




/*Route::get('admin/home',function(){
    return view('admin.home');
})->name('post');


*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
