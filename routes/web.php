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
});

Auth::routes();

Route::resource('/trains', 'TrainController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/read', 'TrainController@index');
Route::get('/delete/{id}', 'TrainController@destroy')->name('apus');
Route::get('/edit/{id}', 'TrainController@edit')->name('edit');
Route::post('/update/{id}','TrainController@update')->name('update');
