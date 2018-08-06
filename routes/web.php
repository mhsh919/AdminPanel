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

Route::get('/','HomeController@index');
Route::group(['prefix' => 'admin','namespace'=>'admin'], function () {
Route::get('/ ','\AdminController@index');
Route::get('users','UsersController@index')->name('admin.users') ;
Route::get('users/create','UsersController@create')->name('admin.create.create');
Route::post('users/store','UsersController@store')->name('admin.create.store');
Route::get('users/delete/{user_id}','UsersController@delete')->name('admin.users.delete');
Route::get('users/edit/{id}','UsersController@edit')->name('admin.users.edit');
Route::post('users/update/{user_id}','UsersController@update')->name('admin.users.update');
});
Route::group(['prefix' => 'admin','namespace'=>'admin'], function () {
    Route::get('/ ','\AdminController@index');
    Route::get('posts','PostsController@index')->name('admin.posts') ;
    Route::get('posts/create','PostsController@create')->name('admin.posts.create');
    Route::post('posts/store','PostsController@store')->name('admin.Posts.store');
    Route::get('posts/delete/{user_id}','PostsController@delete')->name('admin.posts.delete');
    Route::get('posts/edit/{id}','PostsController@edit')->name('admin.posts.edit');
    Route::post('posts/update/{post_id}','PostsController@update')->name('admin.posts.update');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
