<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'Post'], function(){
    Route::get('/', 'IndexController')->name('index');
});

//
//Route::get('/login', 'HomeController@index')->name('home');



Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function(){
    Route::group(['namespace' => 'Archive'], function(){
        Route::get('/archive', 'IndexController')->name('admin.archive.index');
        Route::get('/archive/{post}/restore', 'RestoreController')->name('admin.archive.restore');
    });
    Route::group(['namespace' => 'Post'], function(){
        Route::get('/post', 'IndexController')->name('admin.post.index');
        Route::get('/post/create', 'CreateController')->name('admin.post.create');
        Route::post('/post', 'StoreController')->name('admin.post.store');
        Route::get('/post/{post}', 'ShowController')->name('admin.post.show');
        Route::get('/post/{post}/edit', 'EditController')->name('admin.post.edit');
        Route::patch('/post/{post}', 'UpdateController')->name('admin.post.update');
        Route::delete('/post/{post}', 'DestroyController')->name('admin.post.delete');
    });
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
