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
Route::get('/', 'SearchController@home')->name('welcome');
//rotta per tutti i risultati della ricerca
Route::get('/search', 'SearchController@index')->name('index');
Route::get('/search/show/{slug}', 'SearchController@show')->name('show');
//rotta per le statistiche
Route::get('apartments/chart', 'Host\ApartmentController@chart')->name('chart');
//rotta per i messaggi
Route::post('/message/create', 'MessageController@writeMessage')->name('message.writeMessage');
Auth::routes();
//rotta per le pagine dell'host
Route::name('host.')->namespace('Host')->middleware('auth')->group(function () {
    Route::resource('apartments', 'ApartmentController');
    Route::get('apartments/{id}/sponsor', 'ApartmentController@sponsor')->name('apartments.sponsor');
    Route::post('apartments/sponsor/{id}', 'ApartmentController@sponsorstore')->name('apartments.sponsorstore');
});
