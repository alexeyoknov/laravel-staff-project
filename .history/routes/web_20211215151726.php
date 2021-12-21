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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/','App\Http\Controllers\StaffController@index');
Route::get('/staff','App\Http\Controllers\StaffController@show');
Route::get('/newstaff','App\Http\Controllers\StaffController@create')->name('staffCreate');
Route::post('/newstaff','App\Http\Controllers\StaffController@store')->name('staffStore');
