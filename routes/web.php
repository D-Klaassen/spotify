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

Route::get('login', 'Auth\LoginController@redirectToProvider')->name('login');
Route::get('auth/spotify/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/', 'ContentController@index');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/getTracks', 'PlaylistController@getPlaylists')->name('getTracks');





