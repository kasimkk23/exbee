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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('hero');
    })->name('hero');

    Route::get('/lobby', function () {
        return view('lobby');
    })->name('lobby');
    
    Route::get('/school', function () {
        return view('school');
    })->name('school');
    
    Route::get('/networking', function () {
        return view('networking');
    })->name('networking');
});