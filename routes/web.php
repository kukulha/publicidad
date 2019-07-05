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

Auth::routes();
//Web
Route::get('/', 'Web\PagesController@index')->name('home');
Route::get('directorio', 'Web\PagesController@directory')->name('directory');
Route::get('directorio/categoria/{slug}', 'Web\PagesController@cat')->name('cat');
Route::get('blog', 'Web\PagesController@blog')->name('blog');
Route::get('blog/{slug}', 'Web\PagesController@post')->name('post');
Route::get('blog/categoria/{slug}', 'Web\PagesController@category')->name('category');
Route::get('gracias', 'Web\PagesController@gracias')->name('gracias');
//Admin
Route::get('admin', 'Web\PagesController@admin')->name('admin')->middleware('auth');
Route::resource('services', 'Admin\ServiceController');
Route::resource('stages', 'Admin\StageController');
Route::resource('directories', 'Admin\DirectoryController');
Route::resource('cats', 'Admin\CatController');
Route::resource('categories', 'Admin\CategoryController');
Route::resource('posts', 'Admin\PostController');
Route::resource('messages', 'Admin\MessageController');