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

Route::get('/', 'View@home');
Route::get('/home', 'View@home');
Route::get('/series', 'View@series');
Route::get('/addSeries', 'View@addSeries');
Route::post('/update', 'View@updateForm');

Route::post('insertserie', 'Serie@insertOne');
Route::post('/deleteserie', 'Serie@deleteShow');
Route::post('/updateinsertaction', 'Serie@update');