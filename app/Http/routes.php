<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/home', 'PostsAdminController@index');

Route::get('/contact', 'HomeController@contact');
Route::get('posts', 'PostsController@posts');
Route::get('/auth/logout', function(){
    Auth::logout();
});
Route::get('auth/login', 'auth\AuthController@getLogin');
Route::post('auth/login', 'auth\AuthController@postLogin');

Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
    Route::get('',
        [
            'as' => 'admin.index',
            'uses' => 'PostsAdminController@index'
        ]
    );
    Route::group(['prefix'=>'posts'], function(){
        Route::get('',
            [
                'as' => 'admin.posts.index',
                'uses' => 'PostsAdminController@index'
            ]
        );
        Route::get('create',
            [
                'as' => 'admin.posts.create',
                'uses' => 'PostsAdminController@create'
            ]);
        Route::post('store',
            [
                'as' => 'admin.posts.store',
                'uses' => 'PostsAdminController@store'
            ]);
        Route::get('edit/{id}',
            [
                'as' => 'admin.posts.edit',
                'uses' => 'PostsAdminController@edit'
            ]);
        Route::get('destroy/{id}',
            [
                'as' => 'admin.posts.destroy',
                'uses' => 'PostsAdminController@destroy'
            ]);
        Route::put('update/{id}',
            [
                'as' => 'admin.posts.update',
                'uses' => 'PostsAdminController@update'
            ]);

    });

});

Route::get('/posts/post/{id}', 'PostsController@post');

Route::get('test', 'TestController@index');
Route::get('test/notas', 'TestController@notas');
Route::get('test/{nome}', 'TestController@index');
