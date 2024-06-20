<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('home');

Route::get('/article/{slug}', [App\Http\Controllers\PostController::class, 'show'])->name('posts.single');

Route::get('/category/{slug}', [App\Http\Controllers\CategoryController::class, 'show'])->name('categories.single');

require __DIR__.'/auth.php';

Route::group(['prefix' => 'verwaltung/','namespace' => 'App\Http\Controllers\Verwaltung','middleware' => ['isadmin','auth']], function(){
	Route::get('/', 'MainController@index')->name('verwaltung.index');

    Route::resource('/categories', 'CategoryController');

    Route::resource('/tags', 'TagController');

    Route::resource('/posts', 'PostController');

    Route::resource('/register', 'UserController');

});