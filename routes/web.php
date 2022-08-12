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
// Route::get('flutterwave', 'PaymentController@index')->name('flutterwave');
// Route::post('flutterwave/payment','PaymentController@store')->name('flutterwave.payment');
// Route::get('flutterwave/callback','PaymentController@callback')->name('flutterwave-callback');