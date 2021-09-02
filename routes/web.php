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

Route::get('/motor', 'MotorController@index');
Route::post('/motor/create', 'MotorController@create');
Route::get('/motor/{id_motor}/edit', 'MotorController@edit');
Route::post('/motor/{id_motor}/update', 'MotorController@update');
Route::get('/motor/{id_motor}/delete', 'MotorController@delete');

Route::get('/pembeli', 'PembeliController@index');
Route::post('/pembeli/create', 'PembeliController@create');
Route::get('/pembeli/{id_pembeli}/edit', 'PembeliController@edit');
Route::post('/pembeli/{id_pembeli}/update', 'PembeliController@update');
Route::get('/pembeli/{id_pembeli}/delete', 'PembeliController@delete');

Route::get('/admin', 'AdminController@index');
Route::post('/admin/create', 'AdminController@create');
Route::get('/admin/{id_admin}/edit', 'AdminController@edit');
Route::post('/admin/{id_admin}/update', 'adminController@update');
Route::get('/admin/{id_admin}/delete', 'AdminController@delete');

Route::get('/kredit', 'KreditController@index');
Route::post('/kredit/create', 'KreditController@create');
Route::get('/kredit/{id_kredit}/edit', 'KreditController@edit');
Route::post('/kredit/{id_kredit}/update', 'KreditController@update');
Route::get('/kredit/{id_kredit}/delete', 'KreditController@delete');

Route::get('/cicilan', 'CicilanController@index');
Route::post('/cicilan/create', 'CicilanController@create');
Route::get('/cicilan/{id_cicilan}/edit', 'CicilanController@edit');
Route::post('/cicilan/{id_cicilan}/update', 'CicilanController@update');
Route::get('/cicilan/{id_cicilan}/delete', 'CicilanController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
