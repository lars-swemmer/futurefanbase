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
Route::get('/contact', 'PagesController@contact');

Route::get('/products', 'PagesController@products');
Route::get('/products/spotify-fans', 'PagesController@spotifyFans');

Route::get('/online-advertising', 'PagesController@onlineAdvertising');
Route::get('/online-advertising/campaign-types', 'PagesController@campaignTypes');
Route::get('/online-advertising/advertising-platforms', 'PagesController@advertisingPlatforms');
