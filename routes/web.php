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
Route::get('/guest','GuestController@index');
Route::get('/guest/add','GuestController@add');
Route::post('/guest/add','GuestController@create');
Route::get('/reserve','ReserveController@reserve');

Route::get('/room_type','Room_typeController@index');
Route::resource('room','RoomController');