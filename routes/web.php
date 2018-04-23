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
    return view('welcome');
});

Auth::routes();



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

    Route::get('/home', 'HomeController@index')->name('home');

    // Posts Routes
    Route::get('/posts', [
        'uses' => 'PostController@index',
        'as' => 'posts'
    ]);  

    // create and store post
    Route::get('/post/create', [
        'uses' => 'PostController@create',
        'as' => 'post.create'
    ]);

    Route::post('/post/store', [
        'uses' => 'PostController@store',
        'as' => 'post.store'
    ]);

    // trash post
    Route::get('/post/delete/{id}', [
        'uses' => 'PostController@destroy',
        'as' => 'post.delete'
    ]);

    // display trashed posts
    Route::get('/posts/trashed', [
        'uses' => 'PostController@trashed',
        'as' => 'posts.trashed'
    ]);

    // permanently delete post
    Route::get('/posts/kill/{id}', [
        'uses' => 'PostController@kill',
        'as' => 'post.kill'
    ]);

    // Categories Routes
    Route::get('/categories', [
        'uses' => 'CategoryController@index',
        'as' => 'categories'
    ]);

    Route::get('/category/create', [
        'uses' => 'CategoryController@create',
        'as' => 'category.create'
    ]);

    Route::post('/category/store', [
        'uses' => 'CategoryController@store',
        'as' => 'category.store'
    ]);

    Route::get('/category/edit/{id}', [
        'uses' => 'CategoryController@edit',
        'as' => 'category.edit'
    ]);

    Route::post('/category/update/{id}', [
        'uses' => 'CategoryController@update',
        'as' => 'category.update'
    ]);

    Route::get('/category/delete/{id}', [
        'uses' => 'CategoryController@destroy',
        'as' => 'category.delete'
    ]);
    
});
