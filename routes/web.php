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

Route::get('/', 'LinkController@index')->name('home');

Route::post('link', 'LinkController@store')->name('links.generate');

Route::get('{short_link}', 'LinkController@shortenLink')->name('links.short');