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

Route::get('/', function () {
    return view('welcome');
})->name('main');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/start', 'StartController@index')->name('start');              /* getStart example*/
Route::get('/start/data', 'StartController@data')->name('data');           /* data => Controller -> Blade -> Component */
Route::get('/start/ajax', 'StartController@ajax')->name('ajax');           /* data(ajax) => Controller -> Component */
Route::get('/start/getjson', 'StartController@getjson')->name('getjson');  /* getjson */
