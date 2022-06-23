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

Route::get('/', function () {
    return view('welcome');
});

Route::get('my_page', 'MyFirstController@firstController');

Route::get('my_second_page', 'MyFirstController@secondController');

Route::get('my_third_page', 'MySecondController@thirdController');

Route::get('my_new_page', 'MyThirdController@newPage');
