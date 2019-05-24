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

// Route::get('/', function () {
//     return redirect('/booking');
// });

//Route::get('/', 'BookingController@index');

Route::get('/', 'CarsController@index');

Route::get('/result', 'CarsController@result');
Route::get('/contact', 'CarsController@contact');
Route::get('/edit', 'CarsController@edit')->middleware('auth');

Route::post('/save','CarsController@store')->name('save');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
