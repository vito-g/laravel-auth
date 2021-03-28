<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/readers', 'PublicController@index')->name('public-index');//name assegnerà alla rotta che porta al metodo index nome pari a 'public-index'.
Route::get('/readers/{reader}', 'PublicController@show')->name('public-show');//name assegnerà alla rotta che porta al metodo show nome pari a 'public-show'.
