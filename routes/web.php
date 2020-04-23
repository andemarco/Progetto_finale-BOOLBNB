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
//rotta per la landing page
Route::get('/', function () {
    return view('welcome');
});



//rotta per tutti i risultati della ricerca
Route::get('/search', 'SearchController@index')->name('index');
Route::get('/search/show/{slug}', 'SearchController@show')->name('show');

Auth::routes();
Route::name('host.')->namespace('Host')->middleware('auth')->group(function(){
    Route::resource('apartments', 'ApartmentController');
});
