<?php


// User routes

Route::group(['namespace' => 'User'], function () {

    Route::get('/', 'HomeController@index');

    Route::get('post', 'PostController@index')->name('post');

});

// Admin routes

Route::group(['namespace' => 'Admin'], function () {

    Route::get('admin/home', 'AdminHomeController@index')->name('admin.hom');

    Route::resource('admin/user', 'UserController');

    Route::resource('admin/post', 'PostController');

    Route::resource('admin/category', 'CategoryController');

    Route::resource('admin/tag', 'TagController');
});



