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

Route::get('/home', function () {
    return view('home');
});
Route::resource('/pangkat','PangkatController');
Route::resource('/ruangan','RuanganController');
Route::resource('/datapersonel','DatapersonelController');
Route::get('cetakdatapersonel','DatapersonelController@cetakdatapersonel')->name('cetakdatapersonel');
Route::get('cetak/{id}','DatapersonelController@cetak')->name('cetak');
Route::get('/search', 'DatapersonelController@search')->name('search');
Auth::routes();
Route::get('/search', 'DatapersonelController@search')->name('search');

Route::get('/home', 'HomeController@index')->name('home');
