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

Route::get('/', 'HomeController@index');
Route::post('/search','GuestController@search');
Route::get('/reservation/{id}','ReservationController@reservationOrders');
Route::get('/reservation/details/{id}','ReservationController@reservationDetails');
