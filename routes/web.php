<?php

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

/* Pages */
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
// Route::get('/work', 'PagesController@work');
Route::get('/services', 'PagesController@services');
Route::get('/contact', 'PagesController@contact');
Route::get('/spotify', 'PagesController@spotify');
Route::get('/youtube', 'PagesController@youtube');
Route::get('/facebook', 'PagesController@facebook');
Route::get('/instagram', 'PagesController@instagram');
Route::get('/google', 'PagesController@google');
Route::get('/contest-and-giveaways', 'PagesController@contestAndGiveaways');

/* stops for creating structure*/
// controller => PostsController

// Eloquent model => Post

// migration => create_posts_table

/* creates both migration and controller while making Elo model
// php artisan make:model Post -mc
