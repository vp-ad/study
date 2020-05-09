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

/*Route::get('/', function () {
    return view('home');
});*/

Auth::routes();

Route::get('/create', function(){
    return view('create');
});

Route::get('/', 'DishController@index')->name('dishes');
Route::get('/recipe/{slug}', 'DishController@show')->name('dish.show');
Route::post('/create','DishController@create')->name('dish.create');
Route::get('/create','CreateDataController');
//Route::get('/home', 'HomeController@index')->name('home');
