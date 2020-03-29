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



Route::get('/', 'PublicController@home')->name('welcome');
Route::get('/shops', 'PublicController@shops')->name('shops');
Route::get('/exhange', 'PublicController@exchange')->name('exchange');
Route::get('/charity', 'PublicController@charity')->name('charity');
Route::get('/centers', 'PublicController@centers')->name('centers');
Route::get('/timetable', 'TimeTableController@timetable')->name('timetable');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
