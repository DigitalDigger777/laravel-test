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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'Page\Dashboard')->name('dashboard');
Route::get('/charts', 'Page\Charts')->name('charts');
Route::get('/tables', 'Page\Tables')->name('tables');
Route::get('/components/navbar', 'Page\Components\Navbar')->name('components_navbar');
Route::get('/components/cards', 'Page\Components\Cards')->name('components_cards');
Route::get('/map', 'Map')->name('map');
