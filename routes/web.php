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

Route::get('/', 'HomeController@showHome');

Route::get('/acties', 'HomeController@showActies');

Route::get('/game', 'HomeController@showGame');

Route::get('/reportages', 'HomeController@showReportages');

Route::redirect('/ma', 'https://www.ma-web.nl/');

