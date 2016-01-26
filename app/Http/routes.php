<?php

Route::get('/', 'PostController@index');
Route::get('blog', 'PostController@index');
Route::get('blog/{id}', 'PostController@detalhe');

Route::get('/auth', function(){
    if(Auth::attempt(['email' => 'rodrigoangelovalentini@gmail.com', 'password' => 123456])){
        return "Oi";
    }

    return "Falhou";
});


Route::group(['middleware' => ['web']], function () {

    Route::controllers([
       'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);

    Route::group(['prefix'=>'admin', 'middleware' => 'auth'], function(){
        Route::group(['prefix'=>'posts'], function(){
            Route::get('',['as' => 'admin.posts.index', 'uses' => 'PostAdminController@index']);
            Route::get('create', ['as' => 'admin.posts.create', 'uses' => 'PostAdminController@create']);
            Route::post('store', ['as' => 'admin.posts.store', 'uses' => 'PostAdminController@store']);
            Route::get('edit/{id}', ['as' => 'admin.posts.edit', 'uses' => 'PostAdminController@edit']);
            Route::put('update/{id}', ['as' => 'admin.posts.update', 'uses' => 'PostAdminController@update']);
            Route::get('destroy/{id}', ['as' => 'admin.posts.destroy', 'uses' => 'PostAdminController@destroy']);
        });
    });
});
