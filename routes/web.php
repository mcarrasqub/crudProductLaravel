<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', 'App\Http\Controllers\ProductController@home')->name('product.home');
Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('product.index');
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name('product.create');
Route::post('/products', 'App\Http\Controllers\ProductController@store')->name('product.store');
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name('product.show');
Route::delete('/products/{id}', 'App\Http\Controllers\ProductController@destroy')->name('product.destroy');
*/
Route::get('/', 'App\Http\Controllers\DemonController@home')->name('demon.home');
Route::get('/demons', 'App\Http\Controllers\DemonController@index')->name('demon.index');
Route::get('/demons/create', 'App\Http\Controllers\DemonController@create')->name('demon.create');
Route::post('/demons', 'App\Http\Controllers\DemonController@store')->name('demon.store');
Route::delete('/demons/{id}', 'App\Http\Controllers\DemonController@destroy')->name('demon.destroy');
Route::get('/demons/stats', 'App\Http\Controllers\DemonController@stats')->name('demon.stats');
