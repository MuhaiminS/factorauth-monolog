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

/**
 * Pages Route(s)
 */
Route::get('/','PagesController@index')->name('pages.index');
Route::get('/about','PagesController@about')->name('pages.about');

/**
 * Todo Route(s)
 */
Route::resource('/todos','TodosController');

/**
 * Auth Route(s)
 */
Auth::routes(['verify' => true]);

/**
 * Dashboard Route
 */
Route::get('/home', 'HomeController@index')->name('home');

/**
 * User Profile Route(s)
 */
Route::get('/profile','ProfileController@index')->name('profile.index');
Route::put('/profile','ProfileController@update')->name('profile.update');