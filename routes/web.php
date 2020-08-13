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

Route::get('/', 'WelcomeController@show')->name('welcome');



Route::get('/blog/posts/{post}', 'SinglePostController@show')->name('blog.show');

Auth::routes();



Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('categories', 'CategoriesController');

    Route::resource('posts', 'PostsController');
});

Route::middleware(['auth', 'verifyIsAdmin'])->group(function () {

    Route::resource('users', 'UsersController');
});
