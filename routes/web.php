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

    // Settings
    Route::get('settings', 'SettingController@index')->name('settings');
    Route::get('settings/update', 'SettingController@update')->name('settings.update');

    // Users Routes using Laravel 5.6 named routes
    Route::get('users', 'UserController@index')->name('users');
    Route::get('user/create', 'UserController@create')->name('user.create');
    Route::post('user/store', 'UserController@store')->name('user.store');
    Route::get('user/delete/{id}', 'UserController@destroy')->name('user.delete');

    // Profiles
    Route::get('user/profile', 'ProfileController@index')->name('user.profile');    
    
    // not passing {id} because we can get it from auth
    Route::post('user/profile/update', 'ProfileController@update')->name('user.profile.update');

    // only admins can make changes: see UserController __construct -- middleware('admin');
    Route::get('user/admin/{id}', 'UserController@admin')->name('user.admin');
    Route::get('user/revoke/{id}', 'UserController@revoke')->name('user.revoke');
    

    // Posts Routes
    Route::get('/posts', [
        'uses' => 'PostController@index',
        'as' => 'posts'
    ]); 

    // create and store a post
    Route::get('/post/create', [
        'uses' => 'PostController@create',
        'as' => 'post.create'
    ]);

    Route::post('/post/store', [
        'uses' => 'PostController@store',
        'as' => 'post.store'
    ]);

    // edit and update a post
    Route::get('/post/edit/{id}', [
        'uses' => 'PostController@edit',
        'as' => 'post.edit'
    ]);

    Route::post('/post/update/{id}', [
        'uses' => 'PostController@update',
        'as' => 'post.update'
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

    // restore a post
    Route::get('/posts/restore/{id}', [
        'uses' => 'PostController@restore',
        'as' => 'post.restore'
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

    //tags route
    Route::get('/tags', [
        'uses' => 'TagController@index',
        'as' => 'tags'
    ]);

    Route::get('/tag/create', [
        'uses' => 'TagController@create',
        'as' => 'tag.create'
    ]);

    Route::post('/tag/store', [
        'uses' => 'TagController@store',
        'as' => 'tag.store'
    ]);

    Route::get('/tag/edit/{id}', [
        'uses' => 'TagController@edit',
        'as' => 'tag.edit'
    ]);

    Route::post('/tag/update/{id}', [
        'uses' => 'TagController@update',
        'as' => 'tag.update'
    ]);

    Route::get('/tag/delete/{id}', [
        'uses' => 'TagController@destroy',
        'as' => 'tag.delete'
    ]);
    
});
