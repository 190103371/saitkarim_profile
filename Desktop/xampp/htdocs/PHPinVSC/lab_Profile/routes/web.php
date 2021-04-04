<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\MainController;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use App\Mail\DemoEmail;


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

Route::get('/post/add', function(){
    DB::table('profile')->insert([
        'title' => 'About myself',
        'body' => 'My name is Mukhamedali'
        ]);
});

Route::post('/post/check', 'App\Http\Controllers\MainController@post_check');

Route::get('/post/{id}', [MainController::class, 'get_post_id']);

Route::get('/acquaintance', 'App\Http\Controllers\AcquaintanceController@index')->name('acquaintance');

Route::post('/acquaintance/store', 'App\Http\Controllers\AcquaintanceController@acquaintance_store')->name('acquaintance_store');

Route::get('/demo/mail_send', 'App\Http\Controllers\MainController@mail_send');









































