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

Route::get('/', 'App\Http\Controllers\MainController@about');

Route::get('/experience', 'App\Http\Controllers\MainController@experience');

Route::get('/hobbies', 'App\Http\Controllers\MainController@hobbies');

Route::get('/post', 'App\Http\Controllers\MainController@post')->name('post');

Route::post('/post/check', 'App\Http\Controllers\MainController@post_check');


