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
//Admin
Route::get('admin', 'Web\PagesController@admin')->name('admin')->middleware('auth');
Route::resource('services', 'Admin\ServiceController');
Route::resource('stages', 'Admin\StageController');
Route::resource('directories', 'Admin\DirectoryController');
Route::resource('cats', 'Admin\CatController');