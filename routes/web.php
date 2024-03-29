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

Route::match(['get', 'post'], '/', 'HomeController@index')->name('depan');
Route::get('/disclaimer', function (){
    return view('disclaimer');
})->name('disclaimer');

Auth::routes(['register' => false]);
Route::resource('certificate', 'CertificateController');
