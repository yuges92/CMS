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
//     return view('welcome');
// });

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Auth::routes(['verify' => true, 'register' => false]);

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');
Route::resource('/blogs', 'BlogController');
Route::resource('/portfolios', 'PortfolioController');
Route::resource('/programming', 'ProgrammingController');