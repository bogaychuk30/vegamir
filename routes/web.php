<?php

use Illuminate\Support\Facades\Route;

/*---Web Routes---*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'verwaltung/','namespace' => 'App\Http\Controllers\Verwaltung'], function(){
	Route::get('/', 'MainController@index')->name('verwaltung.index');

    Route::resource('/categories', 'CategoryController');

    Route::resource('/tags', 'TagController');

    Route::resource('/posts', 'PostController');
});
