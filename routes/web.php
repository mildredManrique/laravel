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

Route::get('/', 'UserController@index');
Route::post('users', 'UserController@store')->name('users.store');
Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');

Route::get('/gamba', 'GambaController@index');
Route::post('/gambas', 'GambaController@store')->name('gambas.store');
Route::delete('/gambas/{gamba}', 'GambaController@destroy')->name('gambas.destroy');

Route::get('/vacuna', 'VacunaController@index');
Route::post('/vacunas', 'VacunaController@store')->name('vacunas.store');
Route::delete('/vacunas/{vacuna}', 'VacunaController@destroy')->name('vacunas.destroy');