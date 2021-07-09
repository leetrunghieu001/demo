<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Blog
Route::get('/blog', 'BlogController@all_blog');
Route::get('/add_blog', 'BlogController@add_blog');
Route::post('/save_blog', 'BlogController@save_blog');
Route::get('/edit_blog/{id}', 'BlogController@edit_blog');
Route::post('/update_blog/{id}', 'BlogController@update_blog');
Route::get('/delete_blog/{id}', 'BlogController@delete_blog');
